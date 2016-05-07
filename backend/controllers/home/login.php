<?php
//load model
require_once('backend/models/users.php');

//xử lý
if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    user_login($username, $password);
}

if (isset($_SESSION['user'])) {
    header('location:admin.php');
}

//data
$title = 'Login';

//load view
require('backend/views/home/login.php');