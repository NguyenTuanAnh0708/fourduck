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
    public function amoutShopById($id)
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM shop where id_user='$id'";
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
    public function getIdShop($id_user)
    {
        $conn = conn();
        $sql = "SELECT id_shop from shop where id_user='$id_user'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data['id_shop'];
    }
    public function getStatus($id_user)
    {
        $conn = conn();
        $sql = "SELECT status from shop where id_user='$id_user'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data['status'];
    }
    public function insertShop($id_user, $name_shop, $type_shop, $img_shop, $price, $status)
    {
        $conn = conn();
        $sql = "INSERT INTO `Shop`(`id_user`, `name_shop`, `type_shop`, `img_shop`, `end_shop`, `price`,`near_price`, `status`)
         VALUES ('$id_user','$name_shop','$type_shop','$img_shop',0-0-0,'$price','$price','$status')";
        $result = $conn->query($sql);
        return $result;
    }
}
// session_destroy();
