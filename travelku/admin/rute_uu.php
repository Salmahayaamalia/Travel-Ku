<?php
include "koneksi.php";

$id = $_GET['id_rute'];
$depart = $_POST['depart'];
$rutf = $_POST['rute_from'];
$rutt = $_POST['rute_to'];
$price = $_POST['price'];
$id_tra = $_POST['id_trans'];
$sql = mysqli_query($conn, 'update rute set depart="' . $depart . '", rute_from="' . $rutf . '", rute_to="' . $rutt . '", price="' . $price . '", id_trans="' . $id_tra . '" where id_rute="' . $id . '" ');

if ($sql) {
    echo "<script>window.alert('Data berhasil diedit');window.location.href='rute.php';</script>";
} else {
    echo "<script>window.alert('Data Gagal diubah');window.close();</script>";
}
