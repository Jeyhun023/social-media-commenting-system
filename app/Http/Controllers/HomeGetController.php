<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Comments;

class HomeGetController extends Controller
{
    public function get_index(){
        $data = [
            'users' => User::orderby('id','DESC')->take(9)->get(),
            'posts' => Posts::inRandomOrder()->select('posts.id as post_id', 'posts.user_id', 'posts.image as post_image', 'posts.video', 'posts.text', 'posts.likes', 'posts.dislikes', 'posts.created_at', 'posts.updated_at', 'users.id as user_id', 'users.name', 'users.image', 'users.image as us_image')->join('users', 'posts.user_id', '=', 'users.id')->limit('10')->get(),
        ];
        foreach($data['posts'] as $post){
            $data[$post['post_id']] = Comments::where('post_id',$post['post_id'])->select('comments.post_id', 'comments.id as commentid', 'comments.user_id', 'comments.comment', 'comments.comment_id', 'users.name', 'users.image', 'users.id as user_id')->join('users', 'comments.user_id', '=', 'users.id')->get();
        }
        return view('frontend.index')->with('data', $data);
   }
}
