<?php
require './model/connect.php';
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


    public function inserCartegory()
    {
        $id_user = $_POST['id_user'];
        $name_event = $_POST['name_event'];
        $img_event = $_FILES['img_event']['name'];
        $img_event_tmp = $_FILES['img_event']['tmp'];

        move_uploaded_file($img_event_tmp, "../uploads/" . $img_event);

        $conn = conn();
        $sql = "INSERT INTO event (
            id_user,
            name_event,
            img_event
        ) VALUES (
            '$id_user',
            '$name_event',
            '$img_event'
        )";
        $result = $conn->query($sql);
        return $result;
    }
}
