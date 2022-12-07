
<?php
class Comment
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT comment.id_comment,name_user,id_shop,coment_data,create_at from Comment INNER JOIN User on Comment.id_user=User.id_user INNER JOIN product on Comment.id_product=product.id_product;";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getcomment($id_product)
    {
        $conn = conn();
        $sql = "SELECT comment.id_comment,name_user,id_shop,coment_data,img_user,comment.create_at from Comment INNER JOIN User on Comment.id_user=User.id_user AND Comment.id_product = '" . $id_product . "' INNER JOIN product on Comment.id_product=product.id_product ORDER BY create_at DESC;";
        $result = $conn->query($sql);
        $datacmt = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $datacmt[] = $row;
            }
        }
        return $datacmt;
    }
    public function deleteComment($id_comment)
    {
        $conn = conn();
        $sql = "DELETE FROM `comment` WHERE id_comment = '$id_comment'";
        $result = $conn->query($sql);
        return $result;
    }
    public function insertComment($id_user, $id_product, $coment_data)
    {
        $conn = conn();
        $sql = "INSERT INTO comment (id_user,id_product,coment_data)
        VALUES ('$id_user', '$id_product', '$coment_data')";
        $result = $conn->query($sql);
        return $result;
    }
}

