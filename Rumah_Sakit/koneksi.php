<?php
$con = mysqli_connect('localhost:3308', 'root', 'anka9904', 'datatable_db');

if ($con) {
    echo "Database Tersambung";
} else {
    echo "database tidak bisa tersambung";
    exit;
}
