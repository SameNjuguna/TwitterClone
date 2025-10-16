<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $blog = new Blog([
            'content' => 'My first blog post',
        ]);
        $blog->save();

        return view('dashboard', [
            'blogs' => Blog::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
