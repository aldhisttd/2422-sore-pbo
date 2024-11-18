<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <form action="login_get.php" method="GET">
        <div>
            <label for="">Username</label> <br>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label> <br>
            <input type="password" name="password">
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" name="btn-submit">Login</button>
        </div>
    </form>

</body>
</html>