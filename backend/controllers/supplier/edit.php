<?php
//load model
require_once('backend/models/suppliers.php');

//if form submit
if (!empty($_POST)) {
    $supplier = array(
        'ID' => intval($_POST['ID']),
        'Name' => escape($_POST['Name']),
        'Logo' => escape($_POST['Logo']),
        'Email' => escape($_POST['Email']),
        'Phone' => escape($_POST['Phone'])
    );
    save('suppliers', $supplier);
    header('location:admin.php?controller=supplier');
} else {

}

if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid=0;

//data
$title = ($cid==0) ? 'Insert Supplier' : 'Edit Supplier';
$user = $_SESSION['user'];
$supplier = get_a_record('suppliers', $cid);

//load view
require('backend/views/supplier/edit.php');