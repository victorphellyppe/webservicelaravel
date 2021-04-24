<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/posts', function(){
//     $post = Post::create([
//         'title' => 'my first post',
//         'slug' => 'my-fist-post'
//         ]);

//     return $post;
// });

Route::get('/blah', function(){
    $post = Post::find(2);
    $post->update(['title' => 'meu novo titulo']);
    return $post;
});

Route::resource('posts', 'App\Http\Controllers\PostController');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
