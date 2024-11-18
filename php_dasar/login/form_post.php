<?php 
session_start();
if(isset($_SESSION['login'])){
    header('location:beranda.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php 
if(isset($_SESSION['msg-global'])){
    echo '<span style="color: red; font-style: italic;">'.$_SESSION['msg-global'].'</span>';
}
?>   
    <form action="login_post.php" method="POST">
        <div>
            <label for="">Username</label> <br>
            <input type="text" name="username" style="border: <?= (isset($_SESSION['msg-user']))?"1px solid red":null ?>;"><br>
            <?php 
            if(isset($_SESSION['msg-user'])){
                echo '<span style="color: red; font-style: italic;">'.$_SESSION['msg-user'].'</span>';
            }
            ?>
            
        </div>
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password" style="border: <?= (isset($_SESSION['msg-pass']))?"1px solid red":null ?>;"><br>
            <?php 
            if(isset($_SESSION['msg-pass'])){
                echo '<span style="color: red; font-style: italic;">'.$_SESSION['msg-pass'].'</span>';
            }
            ?>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="btn-submit">Login</button>
        </div>
    </form>

</body>
</html>

<?php
session_destroy();
?>