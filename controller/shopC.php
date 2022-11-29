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
    public function checkStatusShop($id_user, $permission)
    {
        if ($permission) {
            $shop = new Shop();
            $amount = $shop->amoutShopById($id_user);
            if ($amount <= 0) {
                header('location:index.php?url=registerShop');
            }
        }
    }
    public function insertShop($id_user, $name_shop, $type_shop, $img_shop, $month, $price, $status)
    {
        $shop = new Shop();
        $result = $shop->insertShop($id_user, $name_shop, $type_shop, $img_shop, 0, $status);
        if ($result) {
            $billShop = new BillShop();
            $id_shop = $shop->getIdShop($id_user);
            $check = $billShop->inserBill($id_shop, $month, $price, 1);
            if ($check) {
            }
        }
    }
    public function updateShop($id_shop, $month, $price)
    {
        $shop = new Shop();
        $check = $shop->updateEndShop($id_shop, $month, $price);
        return $check;
    }
}
