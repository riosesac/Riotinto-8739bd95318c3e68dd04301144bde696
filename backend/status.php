<?php
$mydate = date("H:i:s");
header("Refresh: 1; JAM=$mydate");
session_start();
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
}
