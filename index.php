<?php
require_once "model/lqsanpham.php";
$loaisp= all_loai_sp();
$sanpham= al_san_pham();
$spmoi=spmoi();
$ran=random();
$ran2=ran2();
$lef=lef();
 require_once "php/Heder.php";
   include "php/listlef.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
            $act = $_GET['act'];
            switch($act) {
                case "sanphamct":
                    if (isset($_GET['id'])&&$_GET['id']>0) {
                        $id_sp=intval($_GET['id']);
                        $ct_sanpham=ctsp($_GET['id']);
                        $binh_luan=load_bl($id_sp);
                        include "php/chitietsp.php";
                    }
            if (isset($_POST['nhanxet'])&& isset($_SESSION['login'])) {
                    $nx=$_POST['nhanxet'];
                    $date_bl=date("Y-m-d");
                    $ma_sp=$_GET['id'];
                    $ma_kh=$_SESSION['ma_kh'];
                    add_bl($nx,$ma_kh, $ma_sp, $date_bl);
            }
            break;
            case"taikhoan":
                include "php/thongtincn.php";
            break;
            case"dx":
                    dx();
                    include "php/produc.php";
                break;
            case"ttcn":
                
                include "php/thongtincn.php";
                break;
            
    }
}else{
  
    include "php/produc.php";
}
// include "php/chitietsp.php";
include "php/footer.php";
?>

