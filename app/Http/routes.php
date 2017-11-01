<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('1',function(){
    #\App\Post::create([
    #    'title'=>'test title',
    #    'content'=>'test content'
    #]);
    #$post=\App\Post::find(1);
    #$post->delete();
    $fourthPost=\App\Post::find(4);
    dd($fourthPost);
    $lastPost=\App\Post::orderBy('id','DESC')‐>first();
    dd($lastPost);
    #$post->title=' saved title';
    #$post->content='saved content';
    #$post->save();
    
});
