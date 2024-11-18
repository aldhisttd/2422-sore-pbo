<?php 

// urlvar.php?nama=budi&umur=24

// echo isset($_GET['nama']);

if(isset($_REQUEST['nama'])){
    echo $_REQUEST['nama'];
}else{
    echo "var url tidak ada";
}

// echo $_GET['nama'];
// echo $_REQUEST['nama'];




?>