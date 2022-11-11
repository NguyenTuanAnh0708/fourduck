<?php
class Shop
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT shop.id_user,name_user,id_shop,name_shop,type_shop from user INNER JOIN shop on user.id_user=shop.id_user;";
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
    public function amoutProduct($id_shop)
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM Product WHERE id_shop='$id_shop'";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
    public function amoutShop()
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM shop";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
}
