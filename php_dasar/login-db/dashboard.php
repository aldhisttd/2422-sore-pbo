<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    selamat datang di dashboard <br>

    <a href="proses/logout.php">logout</a>
</body>
</html>