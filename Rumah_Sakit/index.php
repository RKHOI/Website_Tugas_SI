<?php
$host = "localhost:3308";
$user = "root";
$pass = "anka9904";
$db = "db_rumahsakit";

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
    <!--css and bootstrap-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

</head>
<!--Header-->
<div class="medsos">
    <div class="Container-2">
        <ul>
            <li><a href="https://www.youtube.com/channel/UCkTkAuEbeuU5s5_npA4iTag"><i class="fa-brands fa-youtube-square"></i></a></li>
            <li><a href="https://instagram.com/ridhankhoirullah_63?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram-square"></i></a></li>
            <li><a href="https://github.com/"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>
</div>

<body>
    <div class="container-fluid">

        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <img src="image//user.png" alt="" class=" icon">
                    <span class="description-header">Sistem informasi Rumah Sakit</span>
                    </a>
                </div>
                <div class="illustration">
                    <img src="image/foto.jpeg" alt="" height="140" width="200">
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="index.php">
                        <img src="image/home.png" alt="" class="icon" height="20" width="20">
                        <span class="description">HOME</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="anggota_bpjs.php">
                        <img src="image/database.png" alt="" class="icon">
                        <span class="description">Pasien</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
            <div class="container-2">
                <section class="banner">
                    <h2>Selamat Datang di Sistem Informasi Rumah sakit Sukamaju</h2>
                </section>
                <section class="about">
                    <div class="container-2">
                        <h3>ABOUT</h3>
                        <h4 class="text-center">Nama : Muhammad Ridhan Khoirullah</h4>
                        <h4 class="text-center">NIM:09021282126043</h4>
                        <h4 class="text-center">Kelas : TI REG B</h4>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-2">
            <small> Copyright &copy; 2022 - Muhammad RIDHAN, All Rights Reserved.</small>
        </div>
    </footer>
    <script src="script.js"></script>
</body>



</html>