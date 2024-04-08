<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\FeedBack;

class FeedBackController extends Controller
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
    public function send(): void
    {
        $record = [
            'name' => htmlspecialchars($_POST['name']),
            'address' => htmlspecialchars($_POST['address']),
            'phone' => htmlspecialchars($_POST['phone']),
            'email' => htmlspecialchars($_POST['email']),
        ];
        if (FeedBack::addRecord($record)) {
            $result = [
                'status' => 'success',
                'data' => $record,
            ];
        } else {
            $result = ['status' => 'error'];
        }
        echo json_encode($result);
    }
}