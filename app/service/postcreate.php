<?php

namespace App\service;
use App\Models\Post;

interface postcreate{
    public function insert(Post::class $post);
}

