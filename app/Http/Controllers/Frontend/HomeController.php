<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('frontend.home', [
            'posts' => $posts
        ]);
    }
}
