<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('kategori')) {
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $title = ' in Category ' . $kategori->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts.posts', [
            "title" => "All Post" . $title,
            "posts" => Post::latest()->filter(request(['search', 'kategori', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.post', [
            "title" => "Show",
            "read" => $post
        ]);
    }
}