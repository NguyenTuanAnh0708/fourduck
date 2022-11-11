<?php
class Comment
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT name_user,id_shop,coment_data from Comment INNER JOIN User on Comment.id_user=User.id_user \n"

            . "INNER JOIN product on Comment.id_product=product.id_product;";
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
}
