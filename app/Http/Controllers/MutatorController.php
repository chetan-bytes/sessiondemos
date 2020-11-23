<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MutatorController extends Controller
{
    public function index()
    {
        // create a new post object
        $post = new Post;
        $post->setAttribute('name', 'Post title');
        $post->save();
    }
}
