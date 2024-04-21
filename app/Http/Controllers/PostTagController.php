<?php

namespace App\Http\Controllers;

use App\Models\myPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function __invoke(Request $req)
    {
        // $post = myPost::first();
        // $tag = Tag::first();
        // 將posts的id為1的資料跟tags的id為1的資料寫到資料表post_tag
        // 寫值到資料表post_tag的方法已經寫在posts的Model->tags()裡面
        // $post->tags()->attach($tag);

        // $post = myPost::with('tags')->first();
        // return $post;

        // $post = myPost::first();
        // $tag = Tag::first();
        // $post->tags()->attach([2, 3, 4]);

        $posts = myPost::with('tags')->get();
        return view('PostTag', compact('posts'));
    }
}
