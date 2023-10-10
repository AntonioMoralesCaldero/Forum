<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function show(Forum $forum)
    {
        //Post::Where('forum_id', '=', $forum)->get();
        //SELECT * FROM post WHERE forum_id=$forum;
        $posts = $forum->posts()->with(['owner'])->paginate(6);
        dd($posts);
        return view('foros.detail', compact('posts'));
    }
}
