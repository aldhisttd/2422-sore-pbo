<?php 
session_start();
if(isset($_SESSION['login'])){
    header('location:dashboard.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body class="bg-secondary">


    <div class="container-fluid">


        <div class="row align-items-center justify-content-md-center" style="min-height: 100vh;">



            <div class="col-4">
                <div class="text-center mb-3">
                    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" width="100" class="img-thumbnail" alt="...">
                    <h3>Sekolah Tinggi Teknologi Dumai</h3>
                </div>
                

                <form action="proses/login.php" method="POST">

                    <div class="bg-white p-5 shadow-sm p-3 mb-5 rounded">
                    
                    <?php 
                    if(isset($_SESSION['msg-global'])){
                    ?>
                        <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['msg-global'] ?>
                        </div>
                    <?php
                    }
                    ?>
                    

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input name="username" type="text" class="form-control form-control-lg <?= (isset($_SESSION['msg-user']))?"is-invalid":null ?>">
                            <?php 
                            if(isset($_SESSION['msg-user'])){
                            ?>

                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $_SESSION['msg-user'] ?>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control form-control-lg <?= (isset($_SESSION['msg-pass']))?"is-invalid":null ?>">
                            <?php 
                            if(isset($_SESSION['msg-pass'])){
                            ?>

                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $_SESSION['msg-pass'] ?>
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="text-end">
                            <button type="submit" name="btn-login" class="btn btn-primary btn-lg">Login</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php 
session_destroy();
?>