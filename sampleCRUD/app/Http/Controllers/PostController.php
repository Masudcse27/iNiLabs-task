<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function makepost(PostRequest $request) {
        $data=$request->only(['title','content']);
        $userId=auth()->user()->id;
        $data['user_id'] = $userId;
        // dd($data);
        Post::create($data); 
        return redirect()->intended(route('profile'))->with('postsuccess','Post successfully complete');      
    }

    public function editfrom($id) {
        $post=Post::find($id);
        return view('editfrom',['post' => $post]);
    }

    public function updatepost(PostRequest $request,$id) {
        $post = Post::find($id);
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();
        return redirect()->route('profile')->with('updatesuccess', 'Post updated successfully.');
    }

    public function deletepost($id) {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('profile')->with('deletesuccess', 'Post deleted successfully.');
        } else {
            return redirect()->route('profile')->with('error', 'Post not found.');
        }
    }
}
