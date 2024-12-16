<div class="row">
    <div class="col-12">

        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Data Kategori</h4>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <?php 
                            if(isset($_SESSION['msg']['success'])){
                                echo '
                                    <div class="alert alert-success" role="alert">
                                        '.$_SESSION['msg']['success'].'
                                    </div>
                                ';
                            }
                        ?>

                        <table class="table table-striped mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                include('../assets/koneksi.php');
                                $query = "SELECT * FROM kategori";
                                $q = mysqli_query($koneksi, $query);
                                $no = 1;
                                while ($data = mysqli_fetch_array($q)) {
                            ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $data['kode'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td>
                                            <a href="pages/proses/proses-kategori-delete.php?kode=<?= $data['kode'] ?>" onclick="return confirm('Anda yakin menghapus data ini?')"><i class="fas fa-trash text-danger"></i></a> |  
                                            <a href="?page=kategori-form-update&kode=<?= $data['kode'] ?>"><i class="fas fa-pen text-primary"></i></a> 
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>

                                
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
unset($_SESSION['msg']);
?>