<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view(
            'dashboard',
            [
                'blogs' => Blog::orderBy('created_at', 'desc')->paginate(1),
            ]
        );
    }
}
