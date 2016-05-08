<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELEX Store</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/frontend/layout/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/frontend/layout/style.css">
    <link rel="stylesheet" href="assets/frontend/layout/css/responsive.css">
    <script src="assets/frontend/layout/js/jquery-1.12.3.js"></script>
    <!-- jQuery sticky menu -->
    <script src="assets/frontend/layout/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/layout/js/jquery.sticky.js"></script>
    <!-- jQuery easing -->
    <script src="assets/frontend/layout/js/jquery.easing.1.3.min.js"></script>
    <!-- Main Script -->
    <script src="assets/frontend/layout/js/main.js"></script>
    <script src="assets/frontend/layout/js/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="@Url.Action("Index","Home")">ELEX<span> Store</span></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="cart.html">Cart - <span class="cart-amunt" id="productPrice">0</span><span class="cart-amunt">$</span> <i class="fa fa-shopping-cart cart_anchor"></i> <span class="product-count" id="productCount">0</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <?php include_once('frontend/views/common/menu.php'); ?>
            </div>
        </div>
    </div>
</div>