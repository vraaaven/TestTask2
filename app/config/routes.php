<?php

return [
    '' => [
        'controller' => 'Main',
        'action' => 'index'
    ],
    'detail/{id:\d+}' => [
        'controller' => 'Post',
        'action' => 'detail'
    ],
    'feedback' => [
      'controller' => 'FeedBack',
      'action' => 'index'
    ],
    'feedback/send' => [
        'controller' => 'FeedBack',
        'action' => 'send'
    ],
    'posts' => [
        'controller' => 'Post',
        'action' => 'list'
    ],
    'posts/load' => [
        'controller' => 'Post',
        'action' => 'load'
    ],
    'posts/{id: /d+}' => [
        'controller' => 'Post',
        'action' => 'list'
    ],
];
