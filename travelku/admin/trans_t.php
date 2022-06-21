<?php
    include "koneksi.php";

    $code = $_POST['codec'];
    $desc = $_POST['description'];
    $seat = $_POST['seatc'];
    $id_ty= $_POST['id_trans_type'];

    $sql = mysqli_query($conn, 'INSERT INTO trans (code, description, seat, id_trans_type) VALUES ("'.$code.'", "'.$desc.'", "'.$seat.'", "'.$id_ty.'") ');
    if($sql) {
        echo "<script>window.alert('Data berhasil di tambahkan');window.location.href='trans.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.close();</script>";
    }
?>
