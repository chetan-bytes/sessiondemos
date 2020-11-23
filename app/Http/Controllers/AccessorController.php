<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class AccessorController extends Controller
{
	public function index()
	{
		$post = Post::get()->first();

		dd($post,$post->full_name);
		
	}
}
