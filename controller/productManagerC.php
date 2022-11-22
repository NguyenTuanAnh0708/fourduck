<?php 
require "./model/ProductManager.php";
class ProductManagerC {

    public function getAllProductById($id_shop)
    {
        $ProductManage = new ProductManage();
        $getAllProducts = $ProductManage -> getAllProductByid($id_shop);
        return $getAllProducts;
    }

    public function insertNewProductManager($id_shop,$id_cartegory,$name_product, $description_product, $amount_product, $price_product,$img_src)
    {
        $ProductManage = new ProductManage();
        $insertNewProduct = $ProductManage -> insertProduct($id_cartegory,$id_shop,$name_product, $description_product, $amount_product, $price_product,$img_src);
        if ($insertNewProduct) {
            header("Location: index.php?url=product");
        }
        
    }

    public function getProductById($id_product)
    {
       $ProductManage = new ProductManage;
       $getProductById = $ProductManage -> getProductById($id_product);
       return $getProductById;
    }

    public function updateProduct($id_product,$name_product, $description_product, $amount_product, $price_product, $img_src)
    {
       $ProductManage = new ProductManage;
       $updateProduct = $ProductManage -> updateProduct($id_product,$name_product, $description_product, $amount_product, $price_product, $img_src);
        if ($updateProduct) {
            header("Location: index.php?url=product");
        }
    }
    public function deleteProduct($id_product)
    {
        $ProductManage = new ProductManage;
        $deleteProduct = $ProductManage -> deleteProduct($id_product);
        if ($deleteProduct) {
            header("Location: index.php?url=product");
        }
    }
}