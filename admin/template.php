<?php

include("Class/function.php");

$obj = new blogAdmin();

session_start();

$id = $_SESSION['admin_id'];
if ($id == null) {
    header("location: index.php");
}
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->Admin_Logout();
    }
}
?>

<?php include_once("includes/header.php") ?>

<body class="sb-nav-fixed">
    <?php include_once("includes/topnav.php") ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidenav.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">

                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("view/dashboard_view.php");
                        } elseif ($view == "add_post") {
                            include("view/add_postview.php");
                        } elseif ($view == "manage_post") {
                            include("view/manage_postview.php");
                        } elseif ($view == "add_category") {
                            include("view/add_categoryview.php");
                        } elseif ($view == "manage_category") {
                            include("view/manage_categoryview.php");
                        } elseif ($view == "edit_category") {
                            include("view/edit_categoryview.php");
                        }
                    }

                    ?>
                </div>
            </main>
            <?php include_once("includes/footer.php") ?>
        </div>
    </div>
    <?php include_once("includes/script.php") ?>
</body>

</html>