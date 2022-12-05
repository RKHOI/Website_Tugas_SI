<?php
$host = "localhost:3308";
$user = "root";
$pass = "anka9904";
$db = "db_rumahsakit";

$koneksi = mysqli_connect($host, $user, $pass, $db);
$data = mysqli_query($koneksi, "SELECT * from anggota_bpjs");
$hasil = mysqli_fetch_array($data);
$data2 = mysqli_query($koneksi, "SELECT * from rekam_medis");
$row = mysqli_fetch_array($data2);
if (!$koneksi) {
    die("Eror : Tidak Terkoneksi ke Database");
}

$id_rekam_medis = "";
$id_anggota = "";
$tanggal_rekam_medis = "";
$gejala = "";
$tindakan = "";
$resep_obat = "";
$sukses = "";
$error = "";

if (isset($_POST['simpan'])) {
    $id_rekam_medis = $_POST['id_rekam_medis'];
    $id_anggota = $_POST['id_anggota'];
    $tanggal_rekam_medis = $_POST['tanggal_rekam_medis'];
    $gejala = $_POST['gejala'];
    $tindakan = $_POST['tindakan'];
    $resep_obat = $_POST['resep_obat'];

    if ($id_rekam_medis && $id_anggota && $tanggal_rekam_medis && $gejala && $tindakan && $resep_obat) {
        $sql1 = "insert into rekam_medis (id_rekam_medis,id_anggota,tanggal_rekam_medis,gejala,tindakan,resep_obat) values ('$id_rekam_medis','$id_anggota','$tanggal_rekam_medis','$gejala','$tindakan','$resep_obat')";
        $sql1 = mysqli_query($koneksi, $sql1);
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
    <title>Riwayat rekam medis rumah sakit sukamaju</title>

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
        <h1>Rumah Sakit Sukamaju</h1>
    </div>
</header>

<body>
    <div class="mx-auto">
        <!-- Memasukkan data rekam medis -->
        <div class="card border-primary">
            <div class="card-header text-primary">
                Tambahkan Riwayat Rekam Medis Pada Pasien
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
                <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Tambah Riwayat Rekam medis</a>
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Riwayat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="addUser" action="" method="POST">
                                    <div class="mb-3 row">
                                        <label for="addid_rekam_medis" class="col-md-3 form-label">id_rekam medis</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addid_rekam_medis" name="id_rekam_medis">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addId_anggota" class="col-md-3 form-label">id_anggota</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addid_anggota" name="id_anggota">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addtanggal_rekam_medis" class="col-md-3 form-label">Tanggal rekam medis</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="addtanggal_rekam_medis" name="tanggal_rekam_medis">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addgejala" class="col-md-3 form-label">gejala</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addgejala" name="gejala">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addtindakan" class="col-md-3 form-label">tindakan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addtindakan" name="tindakan">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="addresep_obat" class="col-md-3 form-label">resep obat</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="addresep_obat" name="resep_obat">
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

                <!-- Memunculkan table rekam medis -->
                <div class="card border-primary">
                    <h1 class="text-center mt-3">Data pasien anggota BPJS</h1>
                    <div class="card-header text-primary">
                        Data Rekam Medis
                    </div>
                    <div class="card-body">

                        <table id="tabel-data" class="table table-dark">
                            <thead>
                                <tr class="table-secondary">
                                    <th>id_rekam_medis<i class="fa-solid fa-id-card"><i class="fa-solid fa-notes-medical"></i></th>
                                    <th>id_anggota<i class="fa-solid fa-id-card"></th>
                                    <th>tanggal rekam medis<i class="fa-solid fa-calendar-days"></th>
                                    <th>gejala<i class="fa-solid fa-bacterium"></i></th>
                                    <th>tindakan<i class="fa-solid fa-stethoscope"></i></th>
                                    <th>resep obat<i class="fa-solid fa-pills"></i></th>
                                    <th>Option<i class="fa-solid fa-notes-medical"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['id_anggota'])) {
                                    $id_anggota = $_GET['id_anggota'];
                                    $rekam_medis = mysqli_query($koneksi, "select * from rekam_medis where id_anggota ='$id_anggota'");
                                    while ($cetak = mysqli_fetch_array($rekam_medis)) {
                                        echo "<tr>
                    <td>" . $cetak['id_rekam_medis'] . "</td>
                    <td>" . $cetak['id_anggota'] . "</td>
                    <td>" . $cetak['tanggal_rekam_medis'] . "</td>
                    <td>" . $cetak['gejala'] . "</td>
                    <td>" . $cetak['tindakan'] . "</td>
                    <td>" . $cetak['resep_obat'] . "</td>                
                    <td><a href='delete_rekam_medis.php?id_rekam_medis=$row[id_rekam_medis]'>Delete</a>
                    </td>
                    </tr>";
                                    }
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
                            <a href="anggota_bpjs.php" type="button" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
</body>
<footer>
    <div class="container">
        <small> Copyright &copy; 2022 - Muhammad RIDHAN, All Rights Reserved.</small>
    </div>
</footer>

</html>