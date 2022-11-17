<?php
class ProductManage
{

    public function insertProduct($id_shop,$id_cartegory,$name_product, $description_product, $amount_product, $price_product, $img_src)
    {
        $conn = conn();
        $sql =  "INSERT INTO product (id_shop, id_category,name_product,
        description_product, amount_product, price_product, img_product)
         VALUES ('$id_shop','$id_cartegory','$name_product', '$description_product','$amount_product', '$price_product', '$img_src')
        ";
        $result = $conn->query($sql);
        return $result;
    }
}
