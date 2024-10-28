<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>

    <?php 
        $kata = "Budi";
        echo "<h1>".$kata."</h1>";
    ?>

    <h2>Hello<?php echo "</h2>" ?>

    <h2>Hello<?= "</h2>" ?>


    <?php 

    $nilai = 55;

    if($nilai >= 55){
        echo '<p style="color: green;">Lulus</p>';
    }else{
        echo '<p style="color: red; font-style: italic;">Tidak Lulus</p>';
    }


    ?>
</body>
</html>