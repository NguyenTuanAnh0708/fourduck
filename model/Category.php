<?php
class Category
{
    public function getAllCategory()
    {
        $conn = conn();
        $sql = "SELECT * FROM category WHERE role=0";
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
    public function deteleCategory($id_category)
    {
        $conn = conn();
        $sql = "DELETE FROM category WHERE id_category = '$id_category'";
        $result = $conn->query($sql);
        return $result;
    }
    public function insertCategory($id_user, $name_category, $img_category, $role)
    {
        $conn = conn();
        $sql = "INSERT INTO category (id_user,name_category,img_category,role)
        VALUES ('$id_user', '$name_category', '$img_category','$role')";
        $result = $conn->query($sql);
        return $result;
    }
    public function amoutCategoryA()
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM category WHERE role=0";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
}
