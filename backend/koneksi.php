<?php
$koneksi = mysqli_connect("localhost", "root", "D1p@n3garar10", "tester");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
