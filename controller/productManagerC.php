<?php 
require "./model/ProductManager.php";
class ProductManagerC {
    public function insertNewProductManager($id_shop,$id_cartegory,$name_product, $description_product, $amount_product, $price_product,$img_src)
    {
        $ProductManage = new ProductManage();
        $insertNewProduct = $ProductManage -> insertProduct($id_shop,$id_cartegory,$name_product, $description_product, $amount_product, $price_product,$img_src);
        if ($insertNewProduct) {
            echo "upload sản phẩm thành công";
        }
    }
}