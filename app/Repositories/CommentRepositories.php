<?php

namespace App\Repositories;

use App\Models\JdmCommentNews;

class CommentRepositories
{
    public function create($comment){
        $create['user_id'] = auth()->user()->id;
        $create['comments'] = $comment['comments'];
        $create['news_id'] = $comment['news_id'];
        $newComment = JdmCommentNews::create($create);
        return $newComment;
    }
}


?>