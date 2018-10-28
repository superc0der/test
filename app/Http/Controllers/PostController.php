<?php

namespace App\Http\Controllers;
use App\Post;

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

    public function deletePost($id)
    {
        $deleted = delete($id);

        if (!$deleted) {
            return false;
        }

        return true;
    }

    public function getAllPosts()
    {
        $model = Post::all();

        return $model;
    }
}
