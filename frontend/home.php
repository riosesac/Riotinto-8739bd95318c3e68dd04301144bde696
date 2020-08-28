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
    include '../backend/status.php';
    ?>
    <h4>Hai, <?php echo $_SESSION['username']; ?>! anda telah login. Jam saat ini <?php echo $mydate; ?></h4>
    <a href="../backend/logout.php">LOGOUT</a>
</body>

</html>