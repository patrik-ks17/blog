<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    // index, show, create, store, edit, update, destroy

    public function index()
    {
        // dd(Gate::allows('admin'));
        // $this->authorize("admin");
        return view('posts.index', [
            'posts' => Post::latest('posts.created_at')
                ->filter(request(['search', 'category', 'author']))
                ->simplePaginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
