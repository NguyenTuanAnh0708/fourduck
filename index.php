<?php
$admin = true;
require "./controller/userC.php";
$userC = new userC();
if ($admin) {
    error_reporting(0);
    $url = null;
    $url = $_GET['url'];
    include './view/admin/headerAdmin.php';
    switch ($url) {
        case 'clienMange':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'del':
                        $id_user = $_GET['id_user'];
                        $userC->delUser($id_user);
                        break;
                }
            }
            $user = new userC();
            $dataUser = $user->getAllUser();
            include './view/admin/khachhang.php';
            break;
        case 'event':
            include './view/admin/event.php';
            break;
        case 'hoadon':
            include './view/admin/hoadon.php';
            break;
        case 'category':
            include './view/admin/loaisp.php';
            break;
        default:
            include './view/admin/admin.php';
    }
    include './view/admin/footerAdmin.php';
}
