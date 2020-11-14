<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {

  
        $post = [
                'my-first-post' =>'Hai, This is my first draft',
                 'my-sec-post' =>'Practicing with learning'
        ];
        
        if(!array_key_exists($post,$posts)){
            abort(404,'sorry that was not found');
        }
        return view('post',[
            'post' => $posts[$post]
        ]);
    }
}
