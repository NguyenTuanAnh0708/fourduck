<?php
ob_start();
$admin = true;
require "./upload/imgur.php";
require "./controller/userC.php";
require "./controller/eventC.php";
require "./controller/categoryC.php";
require "./controller/shopC.php";
require "./controller/commentC.php";
$userC = new userC();
$eventC = new eventC();
$categoryC = new categoryC();
$shopC = new shopC();
$commentC = new commentC();
if ($admin) {
    if (!isset($_GET['url'])) {
        header('location:index.php?url=admin');
    }
    // error_reporting(0);
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
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'delEvent':
                        $id_event = $_GET['id_event'];
                        $eventC->deleteEvent($id_event);
                        break;
                    case 'add':
                        var_dump("okkkkkk");
                        break;
                }
            }
            $event = new eventC();
            $dataEvent = $event->getAllEvent();
            include './view/admin/event.php';
            break;
        case 'shop':
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'update':
                        $id_shop = $_GET['id_shop'];
                        $dataUpdate = $_POST['dataUpdate'];
                        $find = strpos($dataUpdate, '-');
                        $price = substr($dataUpdate, $find + 1, strlen($dataUpdate));
                        $month = substr($dataUpdate, 0, $find);
                        $shopC->updateShop($id_shop, $month, $price);
                        break;
                }
            };
            $dataShop = $shopC->getAllShop();
            include './view/admin/shop.php';
            break;
        case 'editShop':
            if (isset($_GET['id_shop'])) {
                $id_shop = $_GET['id_shop'];
            }
            $dataOne = $shopC->getOneShop($id_shop);
            include './view/admin/editEndShop.php';
            break;
        case "infoShop":
            if (isset($_GET['id_shop'])) {
                $id_shop = $_GET['id_shop'];
            }
            $dataOne = $shopC->getOneShop($id_shop);
            include './view/admin/infoShop.php';
            break;
        case 'category':
            $dataCategory = $categoryC->getAllCategory();
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'del':
                        $id_category = $_GET['id_category'];
                        $categoryC->delCategory($id_category);
                        break;
                    case 'add':
                        if (isset($_POST['btnThem'])) {
                            $category_name = $_POST["category_name"];
                            $file_tmp = $_FILES["file"]['tmp_name'];
                            $img_src = upload($file_tmp);
                            $categoryC->insertCategory('8', $category_name, $img_src);
                            break;
                        }
                    case 'update':
                        if (isset($_POST['btnUpdate'])) {
                            $category_name = $_POST["category_name"];
                            var_dump($category_name);
                            $file_tmp = $_FILES["file"]['tmp_name'];
                            $img_src = upload($file_tmp);
                            $id_category = $_GET['id_category'];
                            $categoryC->updateCategory($id_category, $category_name, $img_src);
                            break;
                        }
                }
            }
            include './view/admin/loaisp.php';
            break;
        case 'formcategory':
            include './view/admin/themloai.php';
            break;
        case 'editcategory':
            if (isset($_GET['id_category'])) {
                $id_category = $_GET['id_category'];
                $dataOne = $categoryC->getOneCategory($id_category);
            }
            include './view/admin/FormEditCategory.php';
            break;
        case 'comment_user':
            $dataComment = $commentC->getAllComment();
            include './view/admin/comment.php';
            break;
        case 'admin':
            $amoutUser = $userC->amoutUser();
            $amountCategory = $categoryC->amoutCategoryA();
            $amountShop = $shopC->amoutShop();
            include './view/admin/admin.php';
        default:
            break;
    }
    include './view/admin/footerAdmin.php';
}
