<?php
$host   = "localhost:3308";
$user   = "root";
$pass   = "anka9904";
$db     = "db_rumahsakit";

$koneksi = mysqli_connect($host, $user, $pass, $db);
$id_anggota = $_GET['id_anggota'];
$pasien = mysqli_query($koneksi, "Select * from anggota_bpjs where id_anggota = '$id_anggota'");
$hasil = mysqli_fetch_array($pasien);
$jenis_kelamin = "";
// membuat function untuk set aktif radio button
function active_radio_button($value, $input)
{
    // apabilan value dari radio sama dengan yang di input
    $result = $value == $input ? 'checked' : '';
    return $result;
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
            width: 800px
        }

        .card {
            margin-top: 10px
        }
    </style>
</head>

<head>
    <title>Edit</title>
</head>

<body>
    <form method="post" action="update.php?id_anggota = $_GET['id_anggota']">
        <input type="hidden" value="<?php echo $row['id_anggota']; ?>" name="id_anggota">
        <div class="mx-auto">
            <div class="card border-primary">
                <div class="card-header text-primary">
                    <h2 class="text-center">Ubah Data Pasien Anggota BPJS</h2>
                </div>
                <table>
                    <tr>
                        <td>Id_anggota</td>
                        <td><input for="disabledTextInput" type="text" name="id_anggota" value="<?php echo $hasil['id_anggota']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" value="<?php echo $hasil['nama']; ?>" name="nama"></td>
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td>
                        <td><input value="<?php echo $hasil['jenis_kelamin']; ?>" type="text" name="jenis_kelamin"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input value="<?php echo $hasil['tanggal_lahir']; ?>" type="date" name="tanggal_lahir"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="changes" value="simpan">SIMPAN PERUBAHAN</button>
                            <a href="anggota_bpjs.php">Kembali</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </form>