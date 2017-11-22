<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

class TagsController extends Controller
{

    public function index()
    {
        $data = [
            'tags' => Tag::all()
        ];

        return view('tags.index', $data);
    }

    public function show($slug)
    {
        $data = [
            'tag' => $slug,
            'posts' => Post::published()->visible()->whereHasTag($slug)->paginate(25),
        ];

        return view('tags.show', $data);
    }
}