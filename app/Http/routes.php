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
    $post=new \App\Post();
    $post->title=' test title';
    $post->content='test content';
    $post->save();
    #$post=new \App\Post();
    #$post->title='test title',
    #$post->content='test content',
    #$post->save();
});
