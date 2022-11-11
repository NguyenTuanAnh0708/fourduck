<?php
require './model/Comment.php';
class commentC
{
    function getAllComment()
    {
        $comment = new Comment();
        $dataComment = $comment->getAll();
        return $dataComment;
    }
}
