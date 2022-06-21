<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['admin']) || empty($_SESSION['admin']) ) {
    echo "<script>window.alert('Anda harus Sign In terlebih dahulu!!');window.location.href='login.php';</script>";
}
