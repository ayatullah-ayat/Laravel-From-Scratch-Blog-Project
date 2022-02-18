<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostStatusController extends Controller
{
    public function updateStatus(Post $post)
    {
        dd($post);
    }   
}
