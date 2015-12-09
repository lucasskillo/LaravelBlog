<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = [
            0 => 'Post 1',
            1 => 'Post 2',
            2 => 'Post 3',
            3 => 'Post 4',
            4 => 'Post 5',

        ];
        return view('index', compact('posts'));
    }

    public function sobre()
    {
        return view('about');
    }

    public function contato()
    {
        return view('contact');
    }


}
