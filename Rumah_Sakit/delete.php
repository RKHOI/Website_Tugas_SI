<?php
$host   = "localhost:3308";
$user   = "root";
$pass   = "anka9904";
$db     = "db_rumahsakit";

$con = mysqli_connect($host, $user, $pass, $db);
// menyimpan data id kedalam variabel
$id_anggota  = $_GET['id_anggota'];
// query SQL untuk insert data
$query = "DELETE from anggota_bpjs where id_anggota='$id_anggota'";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
header("location:anggota_bpjs.php");
