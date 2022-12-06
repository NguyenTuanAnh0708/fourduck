<?php
require "./model/ProductManager.php";
class ProductManagerC
{

    public function getAllProduct()
    {
        $ProductManage = new ProductManage();
        $getAllProduct = $ProductManage->getAllProduct();
        return $getAllProduct;
    }


    public function ProductByCategory($id_category)
    {
        $ProductManage = new ProductManage();
        $productCategory = $ProductManage->selectProductByCategory($id_category);
        return $productCategory;
    }
    public function getAllProductById($id_shop)
    {
        $ProductManage = new ProductManage();
        $getAllProductsById = $ProductManage->getAllProductByid($id_shop);
        return $getAllProductsById;
    }

    public function insertNewProductManager($id_shop, $id_cartegory, $name_product, $description_product, $amount_product, $price_product, $img_src)
    {
        $ProductManage = new ProductManage();
        $insertNewProduct = $ProductManage->insertProduct($id_cartegory, $id_shop, $name_product, $description_product, $amount_product, $price_product, $img_src);
        if ($insertNewProduct) {
            header("Location: index.php?url=product");
        }
    }

    public function getProductById($id_product)
    {
        $ProductManage = new ProductManage;
        $getProductById = $ProductManage->getProductById($id_product);
        return $getProductById;
    }

    public function updateProduct($id_product, $name_product, $description_product, $amount_product, $price_product, $img_src, $sale)
    {
        $ProductManage = new ProductManage;
        $updateProduct = $ProductManage->updateProduct($id_product, $name_product, $description_product, $amount_product, $price_product, $img_src, $sale);
        if ($updateProduct) {
            header("Location: index.php?url=product");
        }
    }
    public function deleteProduct($id_product)
    {
        $ProductManage = new ProductManage;
        $deleteProduct = $ProductManage->deleteProduct($id_product);
        if ($deleteProduct) {
            header("Location: index.php?url=product");
        }
    }

    public function selectProductsBySales()
    {
        $ProductManage = new ProductManage;
        $selectProductsBySale = $ProductManage->seclectProductsBySale();
        return $selectProductsBySale;
    }

    public function selectProductsBySalesAll()
    {
        $ProductManage = new ProductManage;
        $selectProductsBySale = $ProductManage->seclectProductsBySaleAll();
        return $selectProductsBySale;
    }

    public function TopTodayProducts()
    {
        $ProductManage = new ProductManage;
        $topTodayProducts = $ProductManage->topTodayProducts();
        return $topTodayProducts;
    }
    public function pageDetailProduct($id_product)
    {
        $ProductManage = new ProductManage;
        $detailProduct = $ProductManage->selectProductById($id_product);
        return $detailProduct;
    }


    //
    public function getAllCategory()
    {
        $category = new Category();
        $dataCategory = $category->getAllCategory();
        return $dataCategory;
    }

    //
}
