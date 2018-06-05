<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(Posts $posts)
    {
        //dd($posts);
    	//$posts = Post::all();
        $posts = $posts->all();
        //$posts = (new \App\Repositories\Posts)->all();
    	return view('blogs/index', compact('posts'));
    }

    public function show()
    {
    	return view('posts/show');
    }

    public function create()
    {
    	return view('posts/create');
    }

     public function store()
    {
        //dd(auth()->id());
    	/*
    	//dd(request(['title','body']));
    	$post = new Post();
    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();
    	*/
    	/*
    	Post::create([
    		'title' => request('title'),
    		'body' => request('body')
    	]);
    	*/

    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required',
    	]);

        
        auth()->user()->publish(
            new Post(request(['title','body']))
        );
        
        
        /*
    	//Post::create(request(['title','body','user_id']));
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id() 
        ]);
        */
        session()->flash('message','Your post has now been published');
        
    	return redirect('/blog');
        

    }
}
