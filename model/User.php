<?php
require './model/connect.php';
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
    public function getAllUserclient($id_user)
    {
        $conn = conn();
        $sql = "SELECT * FORM  user  WHERE id_user='$id_user'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return null;
        }
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
    public function checkUserExist($gmail)
    {
        $conn = conn();
        $sql = "SELECT count(*) as 'count' FROM user WHERE gmail='$gmail'";
        $result = $conn->query($sql);
        $count = $result->fetch_assoc();
        $parse = (int)$count['count'];
        if ($parse > 0) {
            return true;
        } else {
            return false;
        };
    }
    public function insertNewUser($name, $gmail, $password, $img_user, $phone, $location, $role)
    {
        $conn = conn();
        $sql = "INSERT INTO `User`(`name_user`, `gmail`, `password`, `img_user`, `phone`, `address`, `role`) VALUES ('$name','$gmail','$password','$img_user','$phone','$location','$role')";
        $result = $conn->query($sql);
        return $result;
    }
    public function updateUser($id_user,$name, $gmail, $password, $img_user, $phone, $address)
    {
        $conn = conn();
        $sql = "UPDATE `user` SET,`name_user`='[value-2]',`gmail`='[value-3]',`password`='[value-4]',`img_user`='[value-5]',`phone`='[value-6]',`address`='[value-7]',`role`='[value-8]',`create_at`='[value-9]',`update_at`='[value-10]' WHERE 1";
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
    public function amoutUser()
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM User WHERE role=2 or role =1";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
}
