<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta http-equiv="refresh" content="1">
</head>

<body>
    <?php
    $mydate = date("H:i:s");
    header("Refresh: 1; JAM=$mydate");
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <h4>Hai, <?php echo $_SESSION['username']; ?>! anda telah login. Jam saat ini <?php echo $mydate; ?></h4>
    <a href="logout.php">LOGOUT</a>
</body>

</html>