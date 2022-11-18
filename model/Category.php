<?php
class Category
{
    public function getAllCategory()
    {
        $conn = conn();
        $sql = "SELECT * FROM category";
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
    public function getOne($id_category)
    {
        $conn = conn();
        $sql = "SELECT * FROM category Where id_category='$id_category'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }
    public function deteleCategory($id_category)
    {
        $conn = conn();
        $sql = "DELETE FROM category WHERE id_category = '$id_category'";
        $result = $conn->query($sql);
        return $result;
    }
    public function updateCategory($id_category, $name_category, $img_category)
    {
        $conn = conn();
        $sql = "UPDATE category SET name_category='$name_category',img_category='$img_category' where id_category='$id_category'";
        $result = $conn->query($sql);
        return $result;
    }

    public function insertCategory($id_user, $name_category, $img_category)
    {
        $conn = conn();
        $sql = "INSERT INTO category (id_user,name_category,img_category)
        VALUES ('$id_user', '$name_category', '$img_category')";
        $result = $conn->query($sql);
        return $result;
    }
    public function amoutCategoryA()
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM category";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
}
