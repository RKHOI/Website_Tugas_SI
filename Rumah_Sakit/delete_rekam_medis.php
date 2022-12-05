<?php
$host   = "localhost:3308";
$user   = "root";
$pass   = "anka9904";
$db     = "db_rumahsakit";
//rekam medis
$con = mysqli_connect($host, $user, $pass, $db);
// menyimpan data id kedalam variabel
$id_rekam_medis = $_GET['id_rekam_medis'];
// query SQL untuk insert data
$query = "DELETE from rekam_medis where id_rekam_medis='$id_rekam_medis'";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
header("location:rekam_medis.php");
