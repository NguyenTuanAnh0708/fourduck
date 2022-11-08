<?php
require 'connect.php';
class User
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT * FROM User";
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
}
