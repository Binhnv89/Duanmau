<?php
include "./adminn/hradmin.php";
require_once "../model/lqsanpham.php";
require_once "../model/crudadmin.php";
$loaisp= all_loai_sp();
$khachhang=  all_khach_hang();
if((isset($_GET['mn']))&&($_GET['mn']!="")){
        $mn = $_GET['mn'];
        switch($mn) {
            case "sp":
                if (isset($_POST['listok'])) {
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw="";
                    $iddm=0;
                }
                $sanpham=load_id( $kyw,$iddm);
                include "../php/adminn/sanpham.php"; 
        break;
            case "kh":
            include "../php/adminn/khachhang.php";
            // require "php/admin.php";
        break;
            case "dh":
            include "../php/adminn/donhang.php";
            // require "php/admin.php";
        break;
            case "themsp":
                include "../php/adminn/addsp.php";
                $loi=[];
if (isset($_POST['ten'])) {
    $tensp=$_POST['ten'];
    $gia=$_POST['gia'];
    $mota=$_POST['mota'];
    $loaisp=$_POST['loai'];
    $thu_muc =__DIR__. "/adminn/anhsp/";
    if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $thu_muc . $_FILES['anhsp']['name'])) {
    // Xử lý thành công
    $link_anh="http://localhost/PHP/huynvph34362_WD18339/php/adminn/anhsp/".$_FILES['anhsp'] ['name'];
    } else {
        $loi[] = 'Lỗi di chuyển ảnh vào thư mục: ' . error_get_last()['message'];
    }        
    add($tensp, $gia, $link_anh, $loaisp, $mota);
    header("Location: admin.php");
}
        break;
            case "sua":
                if (isset($_GET['id'])&&$_GET['id']>0) {
                    $ct_sanpham=ctsp($_GET['id']);
                    include "../php/adminn/suasp.php";
                }
                $loi=[];
if (isset($_POST['ten']) && isset($_GET['id'])) {
    $id=intval($_GET['id']);
    $tensp=$_POST['ten'];
    $gia=$_POST['gia'];
    $mota=$_POST['mota'];
    $loaisp=$_POST['loai'];
    $link_anh='';
        $thu_muc =__DIR__. "/adminn/anhsp/";
        if ($_FILES['anhsp']) {
            if (move_uploaded_file($_FILES['anhsp']['tmp_name'], $thu_muc . $_FILES['anhsp']['name'])) {
                // Xử lý thành công
                $link_anh="http://localhost/PHP/huynvph34362_WD18339/php/adminn/anhsp/".$_FILES['anhsp'] ['name'];
                // echo $link_anh;
            } else {
                echo'Lỗi di chuyển ảnh vào thư mục: ';
            } 
        }
        if ($link_anh!='') {
            sua($tensp, $gia, $link_anh, $loaisp, $mota,$id);
            header("Location: admin.php");
        }else {
            suanot($tensp, $gia, $loaisp, $mota,$id);
            header("Location: admin.php");
        }
    }
        break;
            case "xoa":
                if (isset($_GET['id'])) {
                    $id=intval($_GET['id']);
                    xoa($id);
                    header("Location: admin.php");
                }else{
                    echo"Không xác định sản phẩm cần xóa!!";
                }
        break;
                case "themloai":
                    include "../php/adminn/add_loai.php";
                    if (isset($_POST['loai'])) {
                        $loai=$_POST['loai'];
                        add_loai($loai);
                        header("Location: admin.php/?mn=dh");
                    }

        break;
                case "sualoai":
                    if (isset($_GET['id'])) {
                        $id=$_GET['id'];
                        $edit_loai= editloai($id);
                        include "../php/adminn/sualoai.php";
                    }
                    if (isset($_POST['loai'])&& isset($_GET['id'])) {
                        $loai=$_POST['loai'];
                        edit($loai, $id);
                        header("Location: admin.php/?mn=dh");
                    }
        break;
                    case "xoaloai":
                        if (isset($_GET['id'])) {
                            $id=intval($_GET['id']);
                            xoa_loai($id);
                            header("Location: admin.php/?mn=dh");
                        }else{
                            echo"Không xác định loại sản phẩm cần xóa!!";
                        }
        break;          
        
}
}else{
// include "../php/adminn/sanpham.php";
}
