<?php

namespace App\Http\Controllers\Backend;

use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\VideosController\Update;
use App\Http\Requests\Backend\VideosController\Store;



class VideosController extends BackEndController
{
    use CommentTrait;
    
    public function __construct(Video $model){
        parent::__construct($model);
    }
        
    protected function filter($rows){
        
        if(request()->has('name') && request()->get('name') != ''){
            $rows = $rows->where('name', request()->get('name'));
        }
        return $rows;
    }

    protected function syncSkillsTags($row, $requestArray){

        if(isset($requestArray['skills']) && !empty($requestArray['skills'])){ // to save skills with new row
            $row->skills()->sync($requestArray['skills']);
        }

        if(isset($requestArray['tags']) && !empty($requestArray['tags'])){ // to save skills with new row
            $row->tags()->sync($requestArray['tags']);
        }
    }

    protected function with(){
        return['user','cat'];
    }

    protected function uploadImage($request){
        $file = $request->file('image');
        $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        return $fileName;
    }


    protected function append(){

        
        $array = [
            'cats' => Category::get(),   // relation 1 to m
            'skills' => Skill::get(),   // relation m to m
            'tags' => Tag::get(),      // relation m to m
            'selectedSkills' => [],
            'selectedTags' => [],
            'comments' => Comment::get(),
        ];

        if(request()->route()->parameter('id')){
            $array['selectedSkills'] = $this->model->find(request()->route()->parameter('id'))
            ->skills()->pluck('skills.id')->toArray();

            //dd($array['selectedSkills']);

            $array['selectedTags'] = $this->model->find(request()->route()->parameter('id'))
            ->tags()->pluck('tags.id')->toArray();

            $array['comments'] = $this->model->find(request()->route()->parameter('id'))
            ->comments()->orderBy('id','desc')->with('user');

        }
        return $array;
    }
  
    public function store(Store $request){

        $fileName = $this->uploadImage($request);
        $requestArray = [
            'user_id' => auth()->user()->id,
            'image' => $fileName
        ] + $request->all();                         // $requestArray => create new row with user login
        // dd($requestArray);
        $row = $this->model->create($requestArray); // $row => create new row video

        $this->syncSkillsTags($row, $requestArray); 

        return redirect('dashboard/videos');

    }

    public function update($id, Update $request){

        $requestArray = $request->all();
        if($request->hasFile('image')){
            
            $fileName = $this->uploadImage($request);
            $requestArray = ['image' => $fileName] + $requestArray;
        }
        $row = $this->model->findOrFail($id);
        $row->update($requestArray);

        $this->syncSkillsTags($row, $requestArray);
        
        return redirect('dashboard/videos');
    }
}
