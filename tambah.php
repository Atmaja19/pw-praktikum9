<?php
require 'connection.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <h1>INPUT DATA</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama Karyawan</label>
                    <input type="text" name="nama">
                </li>
                <li>
                    <label for="email">Email Karyawan</label>
                    <input type="text" name="email">
                </li>
                <li>
                    <label for="address">Alamat Karyawan</label>
                    <input type="text" name="address">
                </li>
                <li>
                    <label for="gender">Gender</label>
                    <select name="gender" size="1">
                        <option>Pria</option>
                        <option>Wanita</option>
                    </select>
                </li>
                <li>
                    <label for="position">Posisi Karyawan : </label>
                    <input type="text" name="position">
                </li>
                <li>
                    <label for="status">Status Karyawan</label>
                    <select name="status" size="1">
                        <option>Part Time</option>
                        <option>Full Time</option>
                    </select>
                </li>
                <button type="submit" name="submit">
                    Tambah Data
                </button>
            </ul>
        </form>
    </div>
    <div class="tombol">
        <a href="praktikum9.php">Back to home Page</a>
    </div>
</body>

</html>