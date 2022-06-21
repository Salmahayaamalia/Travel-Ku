<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['user']) || empty($_SESSION['user']) ) {
    echo "<script>window.alert('Anda harus Sign In terlebih dahulu!!');window.location.href='../index.php';</script>";
}
