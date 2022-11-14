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
