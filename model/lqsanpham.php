<?php
require_once "/xampp/htdocs/PHP/huynvph34362_WD18339/model/pdo.php";
function all_loai_sp(){
    $sql="SELECT * FROM loaisp";
    return pdo_query($sql);
}
function al_san_pham(){
    $sql="SELECT * FROM san_pham ORDER BY ma_sp DESC";
    return pdo_query($sql);
}
function spmoi(){
    $sql="SELECT * FROM san_pham ORDER BY ma_sp DESC LIMIT 4";
    return pdo_query($sql);
}
function ran2(){
    $sql="SELECT * FROM san_pham ORDER BY ma_sp ASC LIMIT 4";
    return pdo_query($sql);
}
function random(){
    $sql="SELECT * FROM san_pham ORDER BY RAND()  LIMIT 4";
    return pdo_query($sql);
}
function lef(){
    $sql="SELECT * FROM san_pham ORDER BY RAND()  LIMIT 3";
    return pdo_query($sql);
}
//chitietsp&& sua sp admin
function ctsp($id){
    $sql="SELECT * FROM san_pham WHERE ma_sp=$id";
    return pdo_query_one($sql);
}
// khách hàng
function all_khach_hang(){
    $sql="SELECT * FROM khach_hang";
    return pdo_query($sql);
}
//tai khoản
function taikhoan($tk,$mk){
    $sql="SELECT * FROM khach_hang WHERE so_dien_thoai='$tk' AND mat_khau='$mk'";
    return pdo_query_one($sql);
}
function all_tk($id){
    $sql="SELECT * FROM khach_hang WHERE so_dien_thoai='$id'";
    return pdo_query_one($sql);
}

//đăng xuất
function dx(){
    if (isset($_SESSION)) {
        // unset($_SESSION['login']);
        session_destroy();
    }
}
//BÌNH LUẬN
function add_bl($nx,$ma_kh, $ma_sp, $date_bl){
    $sql = "INSERT INTO binh_luan (noi_dung, ma_kh, ma_sp, ngay_bl) VALUES (:noi_dung, :ma_kh, :ma_sp, :ngay_bl)";
    $params = array(
        ':noi_dung' => $nx,
        ':ma_kh' => $ma_kh,
        ':ma_sp' => $ma_sp,
        ':ngay_bl' => $date_bl
    );
    pdo_execute1($sql, $params);
}
function load_bl($id_bl){
    $sql="SELECT binh_luan.noi_dung, binh_luan.ngay_bl, khach_hang.ho_ten FROM `binh_luan`
    LEFT JOIN khach_hang ON binh_luan.ma_kh=khach_hang.ma_kh
    LEFT JOIN san_pham ON binh_luan.ma_sp=san_pham.ma_sp
    WHERE san_pham.ma_sp=$id_bl;
    ";
   $binh= pdo_query($sql);
   return $binh;
}
?>