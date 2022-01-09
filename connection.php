<?php
$koneksi = mysqli_connect("localhost", "root", "", "datakaryawan");
function query($query)
{
    global $koneksi;
    $data = mysqli_query($koneksi, $query);
    $listkaryawan = [];
    while ($datakaryawan = mysqli_fetch_assoc($data)) {
        $listkaryawan[] = $datakaryawan;
    }
    return $listkaryawan;
}

function tambah($data)
{
    global $koneksi;

    $nama = $data["nama"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO datakaryawan VALUES ('', '$nama', '$email', '$address', '$gender', '$position', '$status' )";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function hapus($ID)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM datakaryawan WHERE ID = $ID");
    return mysqli_affected_rows($koneksi);
}
