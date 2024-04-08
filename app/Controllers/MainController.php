<?php

namespace App\Controllers;

use App\Models\Post;

class MainController extends Controller
{
    public function index(): void
    {
        $posts = Post::getList(1, 3);
        $vars = [
            "posts" => $posts,
            'count' => Post::getCount(),
        ];
        $this->view->render($vars);
    }
}