<?php
$admin = true;
if ($admin) {
    $url = $_GET['url'];
    include './view/admin/headerAdmin.html';
    switch ($url) {
        case 'clienMange':
            include './view/admin/khachhang.html';
            break;
        case 'event':
            include './view/admin/event.html';
            break;
        case 'hoadon':
            include './view/admin/hoadon.html';
            break;
        case 'category':
            include './view/admin/loaisp.html';
            break;
        default:
            include './view/admin/admin.html';
    }
    include './view/admin/footerAdmin.html';
}
