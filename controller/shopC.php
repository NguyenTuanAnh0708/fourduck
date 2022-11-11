<?php
require './model/Shop.php';
class shopC
{
    public function getAllShop()
    {
        $shop = new Shop();
        $dataShop = $shop->getAll();
        return $dataShop;
    }
    public function amountProduct($id_shop)
    {
        $shop = new Shop();
        $amount = $shop->amoutProduct($id_shop);
        return $amount;
    }
    public function amoutShop()
    {
        $user = new Shop();
        $amout = $user->amoutShop();
        return $amout;
    }
}
