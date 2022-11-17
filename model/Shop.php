<?php
class Shop
{
    public function getAll()
    {
        $conn = conn();
        $sql = "SELECT shop.id_user,name_user,id_shop,name_shop,type_shop,create_shop,end_shop,price,near_price,status,shop.create_at from user INNER JOIN shop on user.id_user=shop.id_user;";
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
    public function getOne($id_shop)
    {
        $conn = conn();
        $sql = "SELECT shop.id_user,name_user,id_shop,name_shop,type_shop,create_shop,end_shop,price,near_price,status,shop.create_at,create_shop,end_shop from user INNER JOIN shop on user.id_user=shop.id_user Where id_shop='$id_shop'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
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
    public function updateEndShop($id_shop, $month, $price)
    {
        $conn = conn();
        $sql = "UPDATE shop SET create_shop=now(), end_shop = DATE_ADD(date(now()), INTERVAL $month MONTH),price=price+ $price,near_price=$price WHERE id_shop=$id_shop";
        $check = $conn->query($sql);
        return $check;
    }
    public function updateStatus()
    {
        $conn = conn();
        $sql = "UPDATE shop
        SET status= CASE
           WHEN date(now())>date(end_shop) THEN 1
           ELSE 0
        END";
        $update  = $conn->query($sql);
        return $update;
    }
}
