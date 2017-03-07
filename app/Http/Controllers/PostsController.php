<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index']]); //if not login, only index, show
        // $this->middleware('auth'); //if not login, can action anything
    }

    public function index()
    {
        $posts = Post::latest()->get(); //send post
                
        return view('home', compact('posts'));
    }

    public function create()
    {
    	return redirect()->home();
    }

    public function store()
    {
    	//validate 
    	$this->validate(request(),[
    		'body' => 'required|min:2',
    		'image' => 'image',
    		]);

    	//store
         
        $post = Post::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            ]);

       //check image
        if(request()->file('image')) //check request file
        {
            $file = request()->file('image'); //save image to $file
            $filename = 'post-'.$post->id.'.'.$file->getClientOriginalExtension(); //customize file name

            $file->move(public_path('upload/imgs/posts/'),$filename); //save file

            $post->post_image = '/upload/imgs/posts/'.$filename; //update record
            $post->save(); //save record
        }

    	//redirect
        return redirect()->home();
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->home();
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show',compact('post'));
    }

    public function update($id)
    {
        //find post
        $post = Post::find($id);

        //validate 
        $this->validate(request(),[
            'body' => 'required|min:2',
            ]);

        // update
        $post->body = request('body');
        $post->save();

        //redirect
        return back();

    }
}
