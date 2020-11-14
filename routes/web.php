<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function () {
    $name = request('name');

    //return $name; //passing request data to view
    
    return view('test',[
        'name'=> $name    
        ]);
});

// Route Wildcard
Route::get('/posts/{post}',function($post){ 
    // return $post;
    $posts=[
        'my-first-post' =>'Hai, This is my first draft',
         'my-sec-post' =>'Practicing with learning'
    ];

    if(!array_key_exists($post,$posts)){
        abort(404,'sorry that was not found');
    }
    return view('post',[
        'post' => $posts[$post]
    ]);
});

// // Routing to Controller
 Route::get('/posts/{post}','PostsController@show');
