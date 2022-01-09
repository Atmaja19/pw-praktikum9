<?php
require 'connection.php';
$datakaryawan = query("SELECT * FROM datakaryawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="tombol">
        <a href="tambah.php">tambahkan data</a>
    </div>

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <?php foreach ($datakaryawan as $item) : ?>
                <tbody>
                    <tr>
                        <td><?= $item["ID"] ?></td>
                        <td><?= $item["nama"] ?></td>
                        <td><?= $item["email"] ?></td>
                        <td><?= $item["address"] ?></td>
                        <td><?= $item["gender"] ?></td>
                        <td><?= $item["position"] ?></td>
                        <td><?= $item["status"] ?></td>
                        <td><a href="hapus.php?ID=<?= $item["ID"]; ?>" onclick="return confirm('YAKIN BOSSSSS?')">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>

</body>

</html>