<?php
include "koneksi.php";
include "session.php";
$id_rute = $_GET['id_rute'];

$sq = mysqli_query($conn, 'select * from user where username="'.$_SESSION['user'].'" ');
$qq = mysqli_fetch_array($sq);
$id_user = $qq['id_user'];

$status = 'Wait';

$sql = mysqli_query($conn, 'select * from rute where id_rute="'.$id_rute.'" ');
$query = mysqli_fetch_array($sql);
$res_a = $query['rute_from'];
$res_d = $query['depart'];
$res_p = $query['price'];
$res_ir = $query['id_rute'];

$rang = range(1, 9);
shuffle($rang);
$c = implode($rang);
$code = $c;

$rs = range(1, 9);
shuffle($rs);
$s = implode($rs);
$res_s = $s;

$id_customer = '1';

$run = mysqli_query($conn, 'INSERT INTO reserv(reserv_code, reserv_a, reserv_date, seat, depart, price, id_user, id_customer, id_rute, status) VALUES ("'.$code.'","'.$res_a.'","'.$res_d.'","'.$res_s.'","'.$res_d.'","'.$res_p.'","'.$id_user.'","'.$id_customer.'","'.$res_ir.'","'.$status.'")');
if($run) {
    echo "<script>window.alert('Berhasil Booking!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('Gagal!!');window.location.href='index.php';</script>";
}
?>
