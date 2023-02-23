<?php

namespace App\Http\Controllers;

class PostController
{

    public function index()
    {   
        $posts = [
            ['title' => 'First post', 'content' => 'First post content'],
            ['title' => 'Second post', 'content' => 'Second post content'],
            ['title' => 'Third post', 'content' => 'Third post content'],
            ['title' => 'Fourth post', 'content' => 'Fourth post content']
        ];

        return view('blog', ['posts' => $posts]);

    }

}