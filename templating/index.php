<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
<?php include('components/style.php') ?>
</head> <!--end::Head--> <!--begin::Body-->

<body class="sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <?php include('components/top-nav.php') ?>
        <?php include('components/left-nav.php') ?>
        <main class="app-main"> <!--begin::App Content Header-->
            <?php include('pages/'.$_REQUEST['page'].'.php');?>
        </main> <!--end::App Main--> <!--begin::Footer-->
        <?php include('components/footer.php') ?>
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <?php include('components/script.php') ?>
</body><!--end::Body-->

</html>