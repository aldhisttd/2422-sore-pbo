<div class="row">
    <div class="col-12">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Form Kategori</h4>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <?php 
                            if(isset($_SESSION['msg']['error'])){
                                echo '
                                    <div class="alert alert-danger" role="alert">
                                        '.$_SESSION['msg']['error'].'
                                    </div>
                                ';
                            }

                            if(isset($_SESSION['msg']['success'])){
                                echo '
                                    <div class="alert alert-success" role="alert">
                                        '.$_SESSION['msg']['success'].'
                                    </div>
                                ';
                            }
                        ?>

                        <form action="pages/proses/proses-kategori-form.php" method="post">

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Kode Kategori</label>
                                    <input name="kode" type="text" class="form-control">
                                    <?php 
                                        if(isset($_SESSION['msg']['err_kode'])){
                                            echo '<span class="text-danger">'.$_SESSION['msg']['err_kode'].'</span>';
                                        }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Ketegori</label>
                                    <input name="nama" type="text" class="form-control">
                                    <?php 
                                        if(isset($_SESSION['msg']['err_nama'])){
                                            echo '<span class="text-danger">'.$_SESSION['msg']['err_nama'].'</span>';
                                        }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Tambahkan Data</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php 
unset($_SESSION['msg']);
?>