<?php

namespace App\Http\Controllers;

use App\Models\myPost;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function __invoke(Request $req)
    {
        $post = myPost::first();
        $tag = Tag::first();

        return $post->tags()->attach($tag);
    }
}
