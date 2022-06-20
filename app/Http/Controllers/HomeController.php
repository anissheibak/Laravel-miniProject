<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Http\Request;
use App\Models\Address as ModelsAddress;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        
        $post=Post::has('comments')->get();
        dd($post);
        return view('welcome');
    }
}
