<?php
require './model/Product.php';
class productC
{
    public function getAllProduct()
    {
        $product = new Product();
        $dataProduct = $product->getAllProduct();
        return $dataProduct;
    }
    public function delProduct($id_product)
    {
        $product = new Product();
        $checkdelete = $product->deteleProduct($id_product);
        if ($checkdelete) {
            header('location:index.php?url=product');
        }
    }
    public function amoutProductA()
    {
        $product = new Product();
        $amount = $product->amoutProductA();
        return $amount;
    }
    public function insertProduct($id_product, $name_product, $img_product, $price_product, $status, $amount_product)
    {
        $product = new Product();
        $check = $product->insertProduct($id_product, $name_product, $img_product, $price_product, $status, $amount_product);
        if ($check) {
            header('location:index.php?url=product');
        }
    }
}


