<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('Posts.posts');
    }
    public function show(Post $post){

        return view('Posts.view',compact('post'));
    }
    public function store(Request $request){
            $this->validate($request,[
                'body'=>'max:255|required',
                'title'=>'required',
        ]);

        $request->user()->post()->create([

            'body'=>$request->body,
            'title'=>$request->title

        ]);
        return redirect()->route('posts');

    }
    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
