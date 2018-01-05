<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;

class PageController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('web.posts', compact('posts'));
    }

    public function category($slug){
        //listar posts-category de una relacion uno a muchos
        $category_id = Category::where('slug',$slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category_id)
                    ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('web.posts',['posts'=> $posts]);
    }

    public function tag($slug){
        //listar posts-tags de una relacion muchos a muchos        
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('web.posts',['posts'=> $posts]);
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }
}
