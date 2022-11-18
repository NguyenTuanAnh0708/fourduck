<?php
class ProductManage
{

    public function insertProduct($id_cartegory,$id_shop,$name_product, $description_product, $amount_product, $price_product, $img_src)
    {
        $conn = conn();
        $sql =  "INSERT INTO product (id_category,id_shop,name_product,
        description_product, amount_product, price_product, img_product)
         VALUES ('$id_cartegory','$id_shop','$name_product', '$description_product','$amount_product', '$price_product', '$img_src')
        ";
        $result = $conn->query($sql);
        return $result;
    }
}
