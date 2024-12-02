<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="../index.html" class="brand-link"> <!--begin::Brand Image--> <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item 
                    <?php 
                        if(
                            $_REQUEST['page'] == 'kategori-tabel' || 
                            $_REQUEST['page'] == 'kategori-form'
                        ){
                            echo "menu-open";
                        }
                    ?>
                "> 
                    <a href="#" class="nav-link 
                        <?php 
                            if(
                                $_REQUEST['page'] == 'kategori-tabel' || 
                                $_REQUEST['page'] == 'kategori-form'
                            ){
                                echo "active";
                            }
                        ?>
                    "> 
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Kategori
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                            <a href="?page=kategori-tabel" class="nav-link <?= ($_REQUEST['page']=="kategori-tabel")?"active":null ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Data Kategori</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="?page=kategori-form" class="nav-link <?= ($_REQUEST['page']=="kategori-form")?"active":null ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Form Kategori</p>
                            </a> 
                        </li>
                    </ul>
                </li>

                <li class="nav-item 
                    <?php 
                        if(
                            $_REQUEST['page'] == 'penerbit-tabel' || 
                            $_REQUEST['page'] == 'penerbit-form'
                        ){
                            echo "menu-open";
                        }
                    ?>
                "> 
                    <a href="#" class="nav-link 
                        <?php 
                            if(
                                $_REQUEST['page'] == 'penerbit-tabel' || 
                                $_REQUEST['page'] == 'penerbit-form'
                            ){
                                echo "active";
                            }
                        ?>
                    ">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Penerbit
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> 
                            <a href="?page=penerbit-tabel" class="nav-link <?= ($_REQUEST['page']=="penerbit-tabel")?"active":null ?>"> 
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Data Penerbit</p>
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a href="?page=penerbit-form" class="nav-link <?= ($_REQUEST['page']=="penerbit-form")?"active":null ?>"> <i class="nav-icon bi bi-circle"></i>
                                <p>Form Penerbit</p>
                            </a> 
                        </li>
                    </ul>
                </li>

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->