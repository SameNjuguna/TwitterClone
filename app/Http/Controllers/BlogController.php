<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function store()
    {

        request()->validate(
            [
                'blog' => 'required|string|min:5|max:245',
            ]
        );

        $blog = Blog::create(
            [
                'content' => request()->get('blog', ''),
            ]
        );
        return redirect()->route('dashboard')->with('success', 'Blog post created successfully!');
    }
}
