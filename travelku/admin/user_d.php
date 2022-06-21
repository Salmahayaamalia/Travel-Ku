<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM user WHERE id_user=$id");
if ($sql) {
  echo "<script>window.alert('Data user dihapus');window.location.href='user.php';</script>";
} else {
  echo "<script>window.alert('Gagal Hapus');window.location.href='user.php';</script>";
}
