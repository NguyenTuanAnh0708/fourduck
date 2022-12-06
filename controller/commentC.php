<?php
require './model/Comment.php';
class commentC
{
    public function getAllComment()
    {
        $comment = new Comment();
        $data = $comment->getAll();
        return $data;
    }

    public function getComment($id_product)
    {
        $comment = new Comment();
        $data = $comment->getComment($id_product);
        return $data;
    }

    public function deleteComment($id_comment)
    {
        $comment = new Comment();
        $checkDelete = $comment->deleteComment($id_comment);
        if ($checkDelete) {
            header('location: index.php?url=comment_user');
        }
    }
    public function insertComment($id_comment, $id_user, $id_product, $coment_data, $create_at)
    {
        $comment = new Comment();
        $check = $comment->insertComment($id_comment, $id_user, $id_product, $coment_data, $create_at);
        if ($check) {
            header('location:index.php?url=detail-product&id_product='.$id_product);
        }
    }
}
