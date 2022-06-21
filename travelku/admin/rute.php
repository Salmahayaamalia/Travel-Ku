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
                    <h5>Rute</h5>
                    <table>
                        <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                            <tr>
                                <td>Depart At</td>
                                <td>Rute From</td>
                                <td>Rute To</td>
                                <td>Price</td>
                                <td>ID Trans</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from rute ');
                            while ($dtt = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td>
                                        <?= $dtt['depart']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['rute_from']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['rute_to']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['price']; ?>
                                    </td>
                                    <td>
                                        <?= $dtt['id_trans']; ?>
                                    </td>
                                    <td>
                                        <a href="rute_d.php?id_rute=<?= $dtt['id_rute']; ?>" onclick="return confirm('Sure, want to delete?');"><button class="red btn waves-effect"><i class="ion-trash-b"></i></button></a>
                                        <a href="rute_u.php?id_rute=<?= $dtt['id_rute']; ?>"><button class="yellow btn waves-effect"><i class="ion-edit"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s12">
                <div class="card-panel">
                    <h3><i class="ion-plus"></i> Add Rute</h3>
                    <form method="post" action="rute_t.php">
                        <div class="input-field">
                            <p class="grey-text">Depart At</p>
                            <input type="date" name="depart" id="depart">
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_from" id="rutf" required>
                            <label for="rutf">Rute From</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="rute_to" id="rutt" required>
                            <label for="rutt">Rute To</label>
                        </div>
                        <div class="input-field">
                            <input type="number" name="price" id="price">
                            <label for="price">Price</label>
                        </div>
                        <select name="id_trans" class="browser-default">
                            <option selected disabled>Transportasi: </option>
                            <?php
                            include 'koneksi.php';
                            $result = mysqli_query($conn, "SELECT * FROM trans ");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?php echo $row['id_trans'] ?>"><?php echo $row['description'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <button class="btn waves-effect green"><i class="ion-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>