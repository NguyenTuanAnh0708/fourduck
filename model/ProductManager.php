<?php
class ProductManage
{

    public function getAllProduct()
    {
        $conn = conn();
        $sql = "SELECT * FROM product ORDER BY create_at DESC";
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
    public function getAllProductByid($id_shop)
    {
        $conn = conn();
        $sql = "SELECT * FROM product where id_shop = '$id_shop'";
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

    public function insertProduct($id_cartegory, $id_shop, $name_product, $description_product, $amount_product, $price_product, $img_src)
    {
        $conn = conn();
        $sql =  "INSERT INTO product (id_category,id_shop,name_product,
        description_product, amount_product, price_product, img_product)
         VALUES ('$id_cartegory','$id_shop','$name_product', '$description_product','$amount_product', '$price_product', '$img_src')
        ";
        $result = $conn->query($sql);
        return $result;
    }

    public function getProductById($id_product)
    {
        $conn = conn();
        $sql = "SELECT * FROM product where id_product = '$id_product'";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }

    public function updateProduct($id_product, $name_product, $description_product, $amount_product, $price_product, $img_src)
    {
        $conn = conn();
        $sql = "UPDATE product SET name_product='$name_product', description_product='$description_product', amount_product='$amount_product',
     price_product='$price_product', img_product='$img_src' where id_product='$id_product'";
        $result = $conn->query($sql);
        return $result;
    }


    public function deleteProduct($id_product)
    {
        $conn = conn();
        $sql = "DELETE FROM product where id_product='$id_product'";
        $result = $conn->query($sql);
        return $result;
    }

    public function seclectProductsBySale()
    {
        $conn = conn();
        $sql = "SELECT * FROM product where sale > 20 limit 7";
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

    public function topTodayProducts()
    {
        $conn = conn();
        $sql = "SELECT * FROM product ORDER BY create_at DESC";
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

    public function  seclectProductsBySaleAll()
    {
        $conn = conn();
        $sql = "SELECT * FROM product where sale > 10";
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

    public function selectProductById($id_product)
    {
        $conn = conn();
        $sql = "SELECT * FROM product where id_product = '$id_product'";
        $result = $conn -> query($sql);
        $data = $result->fetch_assoc();
        return $data;
    }
}
