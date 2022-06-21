<?php
require 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$u = mysqli_real_escape_string($conn, $user);
$p = mysqli_real_escape_string($conn, $pass);

$sql = mysqli_query($conn, 'select * from admin where username="' . $u . '" and password="' . $p . '" ');
$al = mysqli_num_rows($sql);

if ($al == 1) {
    session_start();
    $_SESSION['admin'] = $user;
    echo "<script>window.alert('Selamat, ADMIN!!');window.location.href='index.php';</script>";
} else {
    echo "<script>window.alert('Gagal Sign In!!');window.location.href='login.php';</script>";
}
