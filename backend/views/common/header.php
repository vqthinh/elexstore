<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='assets/backend/layout/css/fullcalendar.css'>
    <link href="assets/backend/layout">
    <link rel='stylesheet' href='assets/backend/layout/css/datatables/datatables.css'>
    <link rel='stylesheet' href='assets/backend/layout/css/datatables/bootstrap.datatables.css'>
    <link rel='stylesheet' href='assets/backend/layout/scss/chosen.css'>
    <link href="assets/backend/layout/scss/font-awesome/font-awesome.css" rel="stylesheet" />
    <link href="assets/backend/layout/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='assets/backend/layout/css/app.css'>
    <link href="assets/backend/layout/favicon.ico" rel="shortcut icon">
    <link href="assets/backend/layout/apple-touch-icon.png" rel="apple-touch-icon">

    <script src='assets/backend/layout/js/jquery.js'></script>
    <script src='assets/backend/layout/js/jquery.sparkline.min.js'></script>
    <script src='assets/backend/layout/js/bootstrap/tab.js'></script>
    <script src='assets/backend/layout/js/bootstrap/dropdown.js'></script>
    <script src='assets/backend/layout/js/bootstrap/collapse.js'></script>
    <script src='assets/backend/layout/js/bootstrap/transition.js'></script>
    <script src='assets/backend/layout/js/bootstrap/tooltip.js'></script>
    <script src='assets/backend/layout/js/jquery.knob.js'></script>
    <script src='assets/backend/layout/js/fullcalendar.min.js'></script>
    <script src='assets/backend/layout/js/datatables/datatables.min.js'></script>
    <script src='assets/backend/layout/js/chosen.jquery.min.js'></script>
    <script src='assets/backend/layout/js/datatables/bootstrap.datatables.js'></script>
    <script src='assets/backend/layout/js/raphael-min.js'></script>
    <script src='assets/backend/layout/js/morris-0.4.3.min.js'></script>
    <script src='assets/backend/layout/js/for_pages/color_settings.js'></script>
    <script src='assets/backend/layout/js/application.js'></script>
    <script src='assets/backend/layout/js/for_pages/dashboard.js'></script>
    <script src='assets/backend/layout/js/ajaxform.js'></script>
    <script src='assets/Plugins/ckfinder/ckfinder.js'></script>
    <script src='assets/Plugins/ckeditor/ckeditor.js'></script>
    <script src='assets/Plugins/jsfunction/commonFunc.js'></script>
    <title><?php echo $title?></title>
</head>
<body>
<div class="all-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">
                <a href="#" class="logo hidden-sm hidden-xs">
                    <i class="icon-cloud-download"></i>
                    <span>ELEX Store Admin</span>
                </a>
                <div class="search-box">
                    <input type="text" placeholder="SEARCH" class="form-control">
                </div>
                <ul class="side-menu">
                    <li>
                        <a href="<?php echo base_url("admin.php") ?>">
                            <span class="badge pull-right">17</span>
                            <i class="icon-dashboard"></i> Dashboard
                        </a>
                    </li>
                </ul>
                <div class="relative-w">
                    <ul class="side-menu side-menu-red">
                        <li>
                            <a href="<?php echo base_url("admin.php?controller=category") ?>">
                            <span class="badge pull-right"></span>
                            <i class="icon-bar-chart"></i> Categories
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin.php?controller=supplier") ?>">
                            <span class="badge pull-right">12</span>
                            <i class="icon-terminal"></i> Suppliers
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("admin.php?controller=product") ?>">
                            <span class="badge pull-right">5</span>
                            <i class="icon-code-fork"></i> Products
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="content-wrapper wood-wrapper">
                <div class="content-inner">
                    <div class="page-header page-header-red">
                        <div class="header-links hidden-xs">
                            <a href="notifications.html"><i class="icon-comments"></i> User Alerts</a>
                            <a href="#"><i class="icon-cog"></i> Settings</a>
                            <a href="admin.php?controller=home&amp;action=logout"><i class="icon-signout"></i> Logout</a>
                        </div>
                        <h1>
                            <?php echo $title?>
                        </h1>
                    </div>
                    <div class="main-content">