<?php

namespace App\Http\Controllers;

use App\Http\Requests\Backend\CommentsController\Store as CommentsStore;
use App\Http\Requests\Frontend\Msgs\Store as MsgsStore;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Msg;



// use App\Http\Requests\Frontend\Msgs\Store;
// use App\Http\Requests\Frontend\Msgs\Store;

class WelcomeController extends Controller
{
    public function __contruct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $videos = Video::orderBy('id','DESC')->paginate(3);
        return view('welcome',compact('videos')); 
    }

    public function category($id){
        $cat = Category::findOrFail($id);
        $videos = Video::where('cat_id', $id)->orderBy('id','DESC')->paginate(3);
        return view('website.category.index',compact('videos','cat'));
    }

    public function video($id){
        $video = Video::with('skills','tags','cat','user','comments.user')->findOrFail($id);
        return view('website.video.index',compact('video'));

    }

    public function skill($id){
        $skill = Skill::findOrFail($id);
        $videos = Video::whereHas('skills', function($query) use ($id){
            $query->where('skill_id', $id);
        })->orderBy('id','DESC')->paginate(3); 
        return view('website.skill.index',compact('videos','skill'));
    }


    public function tag($id){
        $tag = Tag::findOrFail($id);
        $videos = Video::whereHas('tags', function($query) use ($id){
            $query->where('tag_id', $id);
        })->orderBy('id','DESC')->paginate(3);
        return view('website.tag.index',compact('videos','tag'));
    }

    public function commentUpdate($id, CommentsStore $request){
        $comment = Comment::findOrFail($id);
        if( ($comment->user_id == auth()->user()->id) || (auth()->user()->group == 'admin') ){
            $comment->update( ['comment' => $request->comment]);
        }

        return redirect()->route('front.video', ['id' => $comment->video_id , '#commets']);
    }

    // public function commentStore($id, Store $request){

    // }

    public function msgStore(MsgsStore $request){
        dd('asd');
        Msg::create($request->all());
        return redirect()->route('/');

    }
}
