<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        foreach ($posts as $post)
        {
            echo "Post Title : " . $post->title . " Owner by: " . $post->user->name . '<br><hr>';
        }
    }


    public function tokens()
    {

        $users = User::with( ['posts' => function($q){
            $q->where('status', 'active');
        }])->get();


        foreach ($users as $user)
        {
            echo "user : " . $user->name . '<br>';
            foreach ($user->posts as $post)
            {
                echo "post number # " . $post->id . ' | title: ' . $post->title . ' status is : <b>'. $post->status.'</b><br> ' ;
            }
            echo "<hr>";
        }


//        $user = User::first();
//        $user->delete();
    }
}
