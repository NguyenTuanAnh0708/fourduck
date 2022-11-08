<?php
require 'connect.php';
class User
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT * FROM user";
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
    public function getUser($gmail, $password)
    {
        $conn = conn();
        $sql = "SELECT * FROM user WHERE gmail='$gmail' and password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return null;
        }
    }
    public function insertNewUser()
    {
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $img_user = $_FILES['img_user']['name'];
        $img_user_tmp = $_FILES['img_user']["tmp_name"];

        $address = $_POST['address'];
        $role = $_POST['role'];


        move_uploaded_file($img_user_tmp, "../uploads/" . $img_user);

        $conn = conn();
        $sql = "INSERT INTO user (
            gmail,
            password,
            img_user,
            phone,
            address,
            role
        ) VALUES (
            '$gmail',
            '$password',
            '$img_user',
            '$phone',
            '$address',
            '$role'
        )";
        $result = $conn->query($sql);
        return $result;
    }



    public function deteleUser($id_user)
    {
        $conn = conn();
        $sql = "DELETE FROM user WHERE id_user = '$id_user'";
        $result = $conn->query($sql);
        return $result;
    }
}
