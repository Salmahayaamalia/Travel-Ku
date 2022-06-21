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
            <div class="col s5">
                <div class="card-panel grey white-text">
                    <h4>Proses Booking</h4>
                    <?php
                    $id_rute = $_GET['id_rute'];

                    $sql = "select * from rute where id_rute='$id_rute' ";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <b>Tanggal Berangkat</b>
                        <p class="black-text">
                            <?= $data['depart']; ?>
                        </p>
                        <br />
                        <b>Dari</b>
                        <p class="black-text">
                            <?= $data['rute_from']; ?>
                        </p>
                        <br />
                        <b>Tujuan Ke</b>
                        <p class="black-text">
                            <?= $data['rute_to']; ?>
                        </p>
                        <br />
                        <b>Harga Tiket</b>
                        <p class="black-text"><i>Rp.</i>
                            <?= $data['price']; ?>
                        </p>
                        <br />
                    <?php } ?>
                </div>
            </div>
            <div class="col s7">
                <div class="card-panel">
                    <h3>Customer</h3>
                    <form method="post" action="pesan_p.php?id_rute=<?= $data['id_rute']; ?>">
                        <div class="input-field">
                            <?php
                            include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from user where username="' . $_SESSION['user'] . '"');
                            $query = mysqli_fetch_array($sql);
                            ?>
                            <input type="text" name="name" id="name" value="<?= $query['fullname']; ?>">
                            <label for="name">Nama</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="address" id="addr">
                            <label for="addr">Alamat</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="phone" id="phone" value="+62">
                            <label for="phone">No. Telp/ No. HP</label>
                        </div>
                        <select class="browser-default" name="gender">
                            <option disabled selected>Jenis Kelamin :</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <button class="btn waves-effect"><i class="ion-load-c"></i> Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>