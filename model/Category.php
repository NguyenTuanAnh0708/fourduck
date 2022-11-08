<?php
require 'connect.php';
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
        var_dump($data);
    }
    public function deteleCategory($id_category)
    {
        $conn = conn();
        $sql = "DELETE FROM category WHERE id_category = '$id_category'";
        $result = $conn->query($sql);
        return $result;
    }
}
