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
    <link rel='stylesheet' href='assets/Plugins/validators/css/bootstrapValidator.min.css'>

    <link href="assets/backend/layout/scss/font-awesome/font-awesome.css" rel="stylesheet" />
    <link href="assets/backend/layout/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='assets/backend/layout/css/app.css'>
    <link href="assets/backend/layout/favicon.ico" rel="shortcut icon">
    <link href="assets/backend/layout/apple-touch-icon.png" rel="apple-touch-icon">

    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <link href="assets/favicon.ico" rel="shortcut icon">
    <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">

    <title>Responsive Admin template based on Bootstrap 3</title>

</head>

<body>


<div class="all-wrapper no-menu-wrapper">
    <div class="login-logo-w">
        <a href="index.html" class="logo">
            <i class="icon-cloud-download"></i>
            <span>Mars Admin</span>
        </a>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="content-wrapper bold-shadow">
                <div class="content-inner">
                    <div class="main-content main-content-grey-gradient no-page-header">
                        <div class="main-content-inner">
                            <form method="post" action="<?php echo base_url('admin.php?controller=home&action=login'); ?>" id="formLogin">
                                <h3 class="form-title form-title-first"><i class="icon-lock"></i> Login Example</h3>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
                                    <?php global $error;
                                    show_error($error, 'username'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    <?php show_error($error, 'password'); ?>
                                </div>
                                <input type="hidden" name="request_name" value="login"/>
                                <input type="submit" class="btn btn-primary btn-lg" name="login-btn" value="Sign in"/>
                                <a href="index.html" class="btn btn-link">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <script src='assets/Plugins/validators/js/bootstrapValidator.min.js'></script>
    <script>
        $('#formLogin').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'icon icon-ok',
                invalid: 'icon icon-remove',
                validating: 'icon icon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'Username is required and cannot be empty'
                        }
                    }
                }, password: {

                    validators: {
                        notEmpty: {
                            message: 'Password is required and cannot be empty'
                        }
                    }
                }

            }
        });
        </script>
</body>

</html>