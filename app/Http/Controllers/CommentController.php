<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //


    public function vote($type)
    {
//        dd(request()->all());
//        return $type;
        $comment = Comment::find(\request('comment_id'));

        if($comment->voter()->where('upvoted', 1)->where('user_id', \request('user_id'))->count() == 0) {
            if ($type == 1)
                $comment->voter()->attach(\request('user_id'), ['upvoted' => 1]);


        }
        elseif($type == 0) {
            $comment->voter()->detach(\request('user_id'), ['upvoted' => 1]);
//            return 'done';
        }

        return json_encode(['count' => $comment->voter()->where('upvoted', 1)->count()]);
    }
}
