<?php
class  BillShop
{
    public function getAllBill($status)
    {
        $conn = conn();
        $sql = "SELECT 
        bill_shop.id_bill,Shop.id_shop,Shop.id_user,bill_shop.extension_time,bill_shop.extension_time,bill_shop.price,bill_shop.create_at,bill_shop.status
        FROM bill_shop
        INNER JOIN shop
        ON bill_shop.id_shop = Shop.id_shop where bill_shop.status=$status;";
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
    public function inserBill($id_shop, $extension_time, $price, $status)
    {
        $conn = conn();
        $sql = "INSERT INTO bill_shop (id_shop,extension_time,price,status)
         VALUE ('$id_shop','$extension_time','$price','$status')";
        $check = $conn->query($sql);
        return $check;
    }
    public function updateStatus($status, $id_bill)
    {
        $conn = conn();
        $sql = "UPDATE bill_shop SET status='$status' WHERE id_bill=$id_bill";
        $check = $conn->query($sql);
        return $check;
    }
    public function deleteRequest($id)
    {
        $conn = conn();
        $sql = "DELETE FROM bill_shop WHERE id_bill = '$id'";
        $check = $conn->query($sql);
        return $check;
    }
    public function checkRequest($id_shop, $status)
    {
        $conn = conn();
        $sql = "SELECT count(*) as amount FROM `bill_shop` WHERE id_shop=$id_shop and status=$status";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        if ($parse == 0) {
            return false;
        }
        return true;
    }
}
