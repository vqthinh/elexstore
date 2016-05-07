<?php
//load model
require_once('backend/models/products.php');

//if form submit
if (!empty($_POST)) {
    $product = array(
        'ID' => intval($_POST['ID']),
        'CategoryID' => intval($_POST['CategoryID']),
        'SupplierID' => intval($_POST['SupplierID']),
        'Name' => escape($_POST['Name']),
        'Price' => floatval($_POST['Price']),
        'ProductDate' => date("d/m/Y"),
        'Quantity' => intval($_POST['Quantity']),
        'Description' => escape($_POST['Description']),
        'Image' => escape($_POST['Image']),
        'Sells' => intval(0),
        'Views' => intval(0),
        'Special' => boolval($_POST['Special'])
    );
    save('products', $product);


    //chuyển hướng
    header('location:admin.php?controller=product');
}

if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid=0;

//data
$title = ($pid==0) ? 'Insert Product' : 'Edit Product';
$user = $_SESSION['user'];
$product = get_a_record('products', $pid);

$categories = get_all('categories', array(
    'select'=>'ID,Name',
    'order_by' => 'position ASC'
));

//load view
require('backend/views/product/edit.php');