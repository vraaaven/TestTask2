<?php

namespace App\Controllers;

use App\Lib\Helper;
use App\Models\Post;
use App\Models\Reaction;
use App\Models\User;

class PostController extends Controller
{
    public function load(): void
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            $posts = Helper::formateDate(Post::getList($_POST['page'], 5));
            foreach ($posts as $post) {
                $postsArray[] = [
                    'id' => $post->getField('id'),
                    'name' => $post->getField('announce'),
                    'date' => $post->getField('date'),
                ];
            }
            $result['posts'] = $postsArray;
            echo json_encode($result);
            return;
        }
        $this->list();
    }

    public function list($page = 1): void
    {
        $route = $this->route;
        if (isset($route['id'])) {
            $page = $route['id'];
        }
        $posts = Post::getList(1, $page * 5);
        $vars = [
            "posts" => $posts,
            'count' => Post::getCount(),
        ];
        $this->view->render($vars);
    }

    public function detail(): void
    {
        $this->setCookie('user_id');
        $route = $this->route;
        $post = Post::getItem($route["id"]);
        $vars = [
            "post" => $post,
        ];
        $this->view->render($vars);
    }

    protected function setCookie(): void
    {
        if (!isset($_COOKIE['user_id'])) {
            $user_id = uniqid();
            setcookie('user_id', $user_id);
        }
    }

}
