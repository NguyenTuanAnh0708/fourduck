<?php
require './model/Shop.php';
class shopC
{
    public function getAllShop()
    {
        $shop = new Shop();
        $shop->updateStatus();
        $dataShop = $shop->getAll();
        return $dataShop;
    }
    public function getOneShop($id_shop)
    {
        $shop = new Shop;
        $data = $shop->getOne($id_shop);
        return $data;
    }
    public function amountProduct($id_shop)
    {
        $shop = new Shop();
        $amount = $shop->amoutProduct($id_shop);
        return $amount;
    }
    public function amoutShop()
    {
        $shop = new Shop();
        $amout = $shop->amoutShop();
        return $amout;
    }
    public function updateShop($id_shop, $month, $price)
    {
        $shop = new Shop();
        $check = $shop->updateEndShop($id_shop, $month, $price);
        return $check;
    }
}
