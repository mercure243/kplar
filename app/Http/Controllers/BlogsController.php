<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class BlogsController extends Controller
{
    public function index()
    {
        //dd(auth()->id());
        //return session('message');
        //return $tag->posts;
    	$posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

        /*
        if ($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')){
            $posts->whereYear('created_at',$year);
        }
        
        $posts = $posts->get();
        */

        //$archives = Post::archives();
        /*
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                ->groupBy('year','month')
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->toArray();
                //return $archives;
                */

    	return view('blogs/index', compact('posts'));
    }

    public function show(Post $post)
    {
    	//$post = Post::find($id);
    	return view('blogs/show', compact('post'));
    }
}
