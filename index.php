<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>

<h2>Selamat Datang di Aplikasi Hotel</h2>

<?php if(isset($_SESSION['username'])): ?>
    <p>Anda login sebagai: <b><?php echo $_SESSION['username']; ?></b></p>
    <a href="logout.php">Logout</a>
<?php else: ?>
    <p>Anda belum login.</p>
    <a href="login.php">Login</a>
<?php endif; ?>

</body
