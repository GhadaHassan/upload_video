<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;

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

    public function skill($id){
        $skill = Skill::findOrFail($id);
        $videos = Video::whereHas('skills', function($query) use ($id){
            $query->where('skill_id', $id);
        })->orderBy('id','DESC')->paginate(3);
        return view('website.skill.index',compact('videos','skill'));
    }

    public function video($id){
        $video = Video::findOrFail($id);
        return view('website.video.index',compact('video'));

    }
}
