<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\Backend\CommentsController\Store;

trait CommentTrait{

    public function commentStore(Store $request){
        $requestArray = $request->all() + ['user_id' => auth()->user()->id];
        // dD($requesArray);
        Comment::create($requestArray);
        return redirect()->route('videos.edit', ['id' => $requestArray['video_id'], '#comments']);

    }

    public function commentDelete($id){
        $row = Comment::findOrFail($id);
        $row->delete();
        return redirect()->route('videos.edit', ['id' => $row->video_id, '#comments']);
    }

    public function commentUpdate($id, Store $request){
        $row = Comment::findOrFail($id);
        $row->update($request->all());
        return redirect('dashboard/videos/'.$row['video_id'].'/edit', '#comments');
    }
}