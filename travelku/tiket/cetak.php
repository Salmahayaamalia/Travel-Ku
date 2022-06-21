<html>

<head>
    <title>Travel Ku | Penyedia Tiket</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card">
                    <div class="card-title blue white-text">
                        <p>Travel Ku</p>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6">
                                <?php
                                include "koneksi.php";
                                include "session.php";

                                $id_reserv = $_GET['id_reserv'];
                                $sr = mysqli_query($conn, 'select * from reserv where id_reserv="' . $id_reserv . '" ');
                                $fr = mysqli_fetch_array($sr);
                                ?>
                                <form>
                                    <?php
                                    include "koneksi.php";
                                    $sfrom = mysqli_query($conn, 'select * from rute where id_rute="' . $fr['id_rute'] . '" ');
                                    $ffrom = mysqli_fetch_array($sfrom);
                                    ?>
                                    <div class="input-field">
                                        <p>From</p>
                                        <input type="text" id="form" value="<?= $ffrom['rute_from']; ?>">
                                    </div>
                                    <div class="input-field">
                                        <p>To</p>
                                        <input type="text" id="to" value="<?= $ffrom['rute_to']; ?>">
                                    </div>
                                    <div class="input-field">
                                        <p>Date</p>
                                        <input type="date" id="date" value="<?= $fr['reserv_date']; ?>">
                                    </div>
                                </form>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <p>Depart At</p>
                                    <input type="text" id="depat" value="<?= $fr['depart']; ?>">
                                </div>
                                <div class="input-field">
                                    <p>Seat</p>
                                    <input type="text" id="seat" value="<?= $fr['seat']; ?>">
                                </div>
                                <div class="input-field">
                                    <p>Price</p>
                                    <input type="text" id="price" value="Rp. <?= $ffrom['price']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <p class="center">Booking Code</p>
                                        <input class="center" type="text" id="bocode" value="<?= $fr['reserv_code']; ?>">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s5">
                <div class="card">
                    <div class="card-title blue white-text">
                        <p>Customer</p>
                    </div>
                    <div class="card-content">
                        <?php
                        include "koneksi.php";
                        $sc = mysqli_query($conn, 'select * from customer where username="' . $_SESSION['user'] . '" ');
                        $qc = mysqli_fetch_array($sc);
                        $scus = mysqli_query($conn, 'select * from customer where id_customer="' . $qc['id_customer'] . '" ');
                        $fcus = mysqli_fetch_array($scus);
                        ?>
                        <form>
                            <div class="input-field">
                                <p>Name</p>
                                <input type="text" id="nama" value="<?= $fcus['name']; ?>">
                            </div>
                            <div class="input-field">
                                <p>Address</p>
                                <input type="text" id="addr" value="<?= $fcus['address']; ?>">
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <p>Phone Number</p>
                                    <input type="text" id="phone" value="<?= $fcus['phone']; ?>">
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <p>Gender</p>
                                    <input type="text" id="gender" value="<?= $fcus['gender']; ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <p class="center">Booking Code</p>
                                        <input class="center" type="text" id="bocode" value="<?= $fr['reserv_code']; ?>">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    window.print();
</script>