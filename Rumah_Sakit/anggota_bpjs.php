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
        <h1 class="text-center">Rumah Sakit Sukamaju</h1>
    </div>
</header>

<body>
    <div class="mx-auto">
        <!-- Memasukkan Data Anggota BPJS -->
        <div class="card border-primary">
            <div class="card-header text-primary">
                Masukkan Data Pasien Anggota BPJS
            </div>
            <div class="card-body text-primary">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Tambah Anggota</a>
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Anggota</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="addUser" action="" method="POST">
                                    <div class="mb-3 row">
                                        <label for="addId_anggota" class="col-md-3 form-label">id_anggota</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addid_anggota" name="id_anggota">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addNamaField" class="col-md-3 form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addNamaField" name="nama">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addJenisKelaminField" class="col-md-3 form-label">Jenis Kelamin</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addJenisKelaminField" name="jenis_kelamin">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addTanggalLahirField" class="col-md-3 form-label">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="addTanggalLahirField" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" name="simpan" value="Simpan data" class="btn btn-primary" />
                                    </div>
                                </form>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Memunculkan table anggota -->
                <div class="card border-primary">
                    <h1 class="text-center mt-3">Data pasien anggota BPJS</h1>
                    <div class="card-header text-primary">
                        Data Anggota BPJS
                    </div>
                    <div class="card-body">

                        <table id="tabel-data" class="table table-dark">
                            <thead>
                                <tr class="table-secondary">
                                    <th>ID Anggota<i class="fa-solid fa-id-card"></i></th>
                                    <th>Nama<i class="fa-solid fa-circle-user"></i></th>
                                    <th>Jenis Kelamin<i class="fa-solid fa-venus-mars"></i></th>
                                    <th>Tanggal Lahir<i class="fa-solid fa-calendar-days"></i></th>
                                    <th>Opsi<i class="fa-solid fa-gear"></i></th>
                                    <th>Rekam medis<i class="fa-solid fa-notes-medical"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $anggota_bpjs = mysqli_query($con, "select * from anggota_bpjs");
                                while ($row = mysqli_fetch_array($anggota_bpjs)) {
                                    echo "<tr>
                    <td>" . $row['id_anggota'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['jenis_kelamin'] . "</td>
                    <td>" . $row['tanggal_lahir'] . "</td>
                    <td><a href='delete.php?id_anggota=$row[id_anggota]'>Delete</a>
                    <a href='edit_user.php?id_anggota=$row[id_anggota]'>edit</a>
                    </td>
                    <td><a href='rekam_medis.php?id_anggota=$row[id_anggota]'>Cek Rekam Medis</a>
                    </td>
                    </tr>";
                                }
                                ?>
                            </tbody>

                            <script>
                                $(document).ready(function() {
                                    $('#tabel-data').DataTable();
                                });
                            </script>

                        </table>
                        <div class="text-center">
                            <a href="index.php" type="button" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

</body>
<div>
    <footer>
        <div class="container">
            <small> Copyright &copy; 2022 - Muhammad RIDHAN, All Rights Reserved.</small>
        </div>
    </footer>
</div>

</html>