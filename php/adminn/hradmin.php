<?php
require_once "../model/pdo.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/admin/progress.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/admin/style.css">
    <link rel="stylesheet" href="/PHP/huynvph34362_WD18339/css/addsp.css">
</head>
<body>
    <!-- Menu -->
    <aside class="sidebar">
        <ul class="nav">
            <li class="nav-title">MENU</li>
            <li class="nav-item"><a class="nav-link active" href="../admin.php"><i class="fa fa-home"></i> Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="./admin.php/?mn=sp"><i class="fa fa-th-large"></i> Sản Phẩm</a></li>
            <li class="nav-item"><a class="nav-link" href="./admin.php/?mn=dh"><i class="fa-solid fa-truck-fast"></i></i> Danh Mục</a></li>
            <li class="nav-item"><a class="nav-link" href="./admin.php/?mn=kh"><i class="fa-solid fa-users"></i>Khách Hàng</a></li>
            <li class="nav-item">
                <hr>
            </li>
            <li class="nav-item">
                <a href="/PHP/huynvph34362_WD18339/index.php/?act=dx" class="nav-link" >
                    <i class="fa fa-arrow-left"></i>
                    Đăng xuất (về Trang chủ)
                </a>
            </li>
        </ul>
    </aside>
