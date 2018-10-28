<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {
        // Create Post
    }

    public function getPost()
    {
        return [
            'id' => 1,
            'name' => 'Tite'
        ];
    }

    public function suspendPost()
    {
        // Suspend Post
    }
}
