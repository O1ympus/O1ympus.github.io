<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comments extends Controller
{
    public function insert(Request $request){
        $comment = new Comment();
        $comment -> username = $request -> username;
        $comment -> email = $request -> email;
        $comment -> text = $request -> text;

        $comment -> save();
    }

    public function getComments(){
        $comments = Comment::all();
        return view('response', compact('comments'));
    }
}
