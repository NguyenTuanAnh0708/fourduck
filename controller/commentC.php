<?php
require './model/Comment.php';
class commentC
{
    public function getAllComment()
    {
        $comment = new Comment();
        $dataComment = $comment->getAll();
        return $dataComment;
    }
    public function deleteComment($id_comment)
    {
        $comment = new Comment();
        $checkDelete = $comment->deleteComment($id_comment);
        if ($checkDelete) {
            header('location: index.php?url=comment_user');
        }
    }
}
