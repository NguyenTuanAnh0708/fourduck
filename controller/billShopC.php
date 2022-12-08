<?php
require './model/BillShop.php';
class billShopC
{
    public function getAllBillShop()
    {
        $billShop = new BillShop();
        $data = $billShop->getAllBill(0);
        return $data;
    }
    public function getAllRequest()
    {
        $billShop = new BillShop();
        $data = $billShop->getAllBill(1);
        return $data;
    }
    public function inserBill($id_shop, $extension_time, $price, $status)
    {
        $billShop = new BillShop();
        $check = $billShop->inserBill($id_shop, $extension_time, $price, $status);
        if ($check) {
            header('location:index.php?url=turnover');
        }
    }
    public function inserBillClient($id_shop, $extension_time, $price, $status)
    {
        $billShop = new BillShop();
        $check = $billShop->inserBill($id_shop, $extension_time, $price, $status);
        if ($check) {
            header('location:index.php?url=success-register');
        }
    }
    public function updateStatus($status, $id_bill)
    {
        $billShop = new BillShop();
        $check = $billShop->updateStatus($status, $id_bill);
        if ($check) {
            header('location:index.php?url=turnover');
        }
    }
    public function deleteRequest($id)
    {
        $billShop = new BillShop();
        $result = $billShop->deleteRequest($id);
        if ($result) {
            header('location:index.php?url=request');
        }
    }
}
