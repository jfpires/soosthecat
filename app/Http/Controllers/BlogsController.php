<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }
    public function example()
    {
        return view('blogs.example');
    }
}
