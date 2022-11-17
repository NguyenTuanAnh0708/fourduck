<?php
class Product
{
    public function getAllProduct()
    {
        $conn = conn();
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function deteleProduct($id_product)
    {
        $conn = conn();
        $sql = "DELETE FROM product WHERE id_product = '$id_product'";
        $result = $conn->query($sql);
        return $result;
    }
    public function insertProduct($id_product, $name_product, $img_product, $price_product,$amount_product, $status )
    {
        $conn = conn();
        $sql = "INSERT INTO product (id_product,name_product,img_product,price_product, amount_product, status)
        VALUES ('$id_product', '$name_product', '$img_product','$price_product','$amount_product','$status')";
        $result = $conn->query($sql);
        return $result;
    }
    public function amoutProductA()
    {
        $conn = conn();
        $sql = "SELECT COUNT(*) as amount FROM product";
        $result = $conn->query($sql);
        $amout = $result->fetch_assoc();
        $parse = (int)$amout['amount'];
        return $parse;
    }
}
