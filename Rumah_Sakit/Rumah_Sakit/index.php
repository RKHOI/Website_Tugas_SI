<?php
$host = "localhost:3308";
$user = "root";
$pass = "anka9904";
$db = "db_rumahsakit";

$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("Eror : Tidak Terkoneksi ke Database");
}

$id_anggota = "";
$nama = "";
$jenis_kelamin = "";
$tanggal_lahir = "";
$sukses = "";
$error = "";

if (isset($_POST['simpan'])) {
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    if ($id_anggota && $nama && $jenis_kelamin && $tanggal_lahir) {
        $sql1 = "insert into anggota_bpjs (id_anggota,nama,jenis_kelamin,tanggal_lahir) values ('$id_anggota','$nama','$jenis_kelamin','$tanggal_lahir')";
        $sql1 = mysqli_query($con, $sql1);
        if ($sql1) {
            $sukses = "Berhasil memasukkan data baru";
        } else {
            $error = "Gagal memasukkan data baru";
        }
    } else {
        $error = "Silahkan masukkan semua data ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekam Medis Rumah Sakit Sukamaju</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .mx-auto {
            width: 1400px
        }

        .card {
            margin-top: 10px
        }
    </style>
</head>
<!--Header-->
<div class="medsos">
    <div class="Container">
        <ul>
            <li><a href="https://www.youtube.com/channel/UCkTkAuEbeuU5s5_npA4iTag"><i class="fa-brands fa-youtube-square"></i></a></li>
            <li><a href="https://instagram.com/ridhankhoirullah_63?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram-square"></i></a></li>
            <li><a href="https://github.com/"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>
</div>
<header>
    <div class="Container">
        <h1><a href="index.php"></a>Rumah Sakit Sukamaju</h1>
        <ul>
            <li class="active"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="anggota_bpjs.php"><i class="fa-solid fa-database"></i></a></li>
        </ul>
    </div>
</header>

<body>
    <section class="banner">
        <h2>Selamat Datang di Sistem Informasi Rumah sakit Sukamaju</h2>
    </section>
    <section>
        <div class="container-fluid d-grid gap-2 col-6 mx-auto mt-5">
            <a href="anggota_bpjs.php" class="btn btn-dark" type="button"><i class="fa-solid fa-magnifying-glass"></i>Pencarian Anggota BPJS</a>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <p align="justify">Nama: Muhammad Ridhan Khoirullah</p>
            <p align="justify">NIM: 09021282126043</p>
            <p align="justify">Kelas: TI REG B</p>
        </div>
        <footer>
            <div class="container">
                <small> Copyright &copy; 2022 - Muhammad RIDHAN, All Rights Reserved.</small>
            </div>
        </footer>

</html>