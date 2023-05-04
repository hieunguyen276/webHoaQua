<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.php");
} else {
    echo "Chao " . $_SESSION['user'];
}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
    <a href="logout.php">Dang xuat</a>
</body>
</html>