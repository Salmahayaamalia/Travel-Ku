<html>

<head>
    <title>Travel Ku | Penyedia Tiket</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card-panel">
                    <h3>Customer</h3>
                    <form method="post" action="pesan_p.php">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $res_code = $c;
                            ?>
                            <input type="text" name="res_code" id="name" value="<?= $res_code; ?>">
                            <label for="name">Kode Booking</label>
                        </div>
                        <?php
                        include "koneksi.php";
                        $id_rute = $_GET['id_rute'];
                        $sqr = mysqli_query($conn, 'select * from rute where id_rute="' . $id_rute . '" ');
                        $qur = mysqli_fetch_array($sqr);
                        ?>
                        <div class="input-field">
                            <p class="grey-text">Booking Pada</p>
                            <input type="date" name="res_a">
                        </div>
                        <div class="input-field">
                            <p class="grey-text">Tanggal Booking</p>
                            <input type="date" name="res_d" id="tb">
                        </div>
                        <div class="input-field">
                            <?php
                            include "koneksi.php";
                            $sqt = mysqli_query($conn, 'select * from trans where id_trans="' . $qur['id_trans'] . '" ');
                            $qut = mysqli_fetch_array($sqt);
                            ?>
                            <input type="text" name="seat" id="phone" value="<?= $qut['seat']; ?>">
                            <label for="phone">Kode Kursi</label>
                        </div>
                        <div class="input-field">
                            <p class="grey-text">Berangkat Tanggal</p>
                            <input type="date" name="depart" value="<?= $qur['depart']; ?>">
                        </div>
                        <div class="input-field">
                            <input type="number" name="price" id="h" value="<?= $qur['price']; ?>">
                            <label for="h">Harga Tiket</label>
                        </div>
                        <div class="input-field">
                            <?php
                            include "koneksi.php";
                            $squ = mysqli_query($conn, 'select * from user where username="' . $_SESSION['user'] . '" ');
                            $quu = mysqli_fetch_array($squ);
                            ?>
                            <input type="text" name="id_user" id="iu" value="<?= $quu['id_user']; ?>">
                            <label for="iu">ID User</label>
                        </div>
                        <div class="input-field">
                            <?php
                            include "koneksi.php";
                            $cs = mysqli_query($conn, 'select * from customer where username="' . $_SESSION['user'] . '" ');
                            $cq = mysqli_fetch_array($cs);
                            ?>
                            <input type="text" name="id_customer" id="ic" value="<?= $cq['id_customer']; ?>" required>
                            <label for="ic">ID Customer</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="id_rute" id="ir" value="<?= $qur['id_rute']; ?>">
                            <label for="ir">ID Rute</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="status" id="status" value="Proses" class="disabled">
                            <label for="status">Status</label>
                        </div>
                        <button class="btn waves-effect"><i class="ion-load-c"></i> Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>