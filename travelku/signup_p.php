<?php
include "koneksi.php";

$user   = $_POST['username'];
$pass   = $_POST['password'];
$full   = $_POST['fullname'];

$sql    = 'INSERT INTO user(username, password, fullname) VALUES ("'.$user.'", "'.$pass.'", "'.$full.'") ';
$query  = mysqli_query($connect, $sql);

if($query) {
    echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='signin.php';</script>";
} else {
    echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='signup.php';</script>";
}
?>
