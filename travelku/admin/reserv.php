<html>

<head>
    <title>Travel Ku | Mode Admin</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel white-text blue">
                    <h5>Reservation</h5>
                    <table>
                        <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                            <tr>
                                <td>Code Reservation</td>
                                <td>Reservation At</td>
                                <td>Reservation Date</td>
                                <td>Code Seat</td>
                                <td>Depart</td>
                                <td>Price</td>
                                <td>User</td>
                                <td>ID Customer</td>
                                <td>ID Rute</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from reserv ');
                            while ($dtt = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td>
                                        <?= $dtt['reserv_code']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['reserv_at']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['reserv_date']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['seat']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['depart']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['price']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        include "koneksi.php";
                                        $squ = mysqli_query($conn, 'select * from user where id_user="' . $dtt['id_user'] . '" ');
                                        while ($quu = mysqli_fetch_array($squ)) {
                                        ?>
                                            <b><?= $quu['username']; ?></b>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?= $dtt['id_customer']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['id_rute']; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($dtt['status'] == 'Proses') {
                                        ?>
                                            <a href="terima.php?id_reserv=<?= $dtt['id_reserv']; ?>" onclick="return confirm('Ingin Melanjutkan?');" class="white-text">
                                                <button class="btn waves-effect green"><?= $dtt['status']; ?></button>
                                            </a>
                                        <?php
                                        } else {
                                            echo $dtt['status'];
                                        }
                                        ?>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>