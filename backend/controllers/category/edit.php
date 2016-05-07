<?php
//load model
require_once('backend/models/categories.php');

//if form submit 
if (!empty($_POST)) {
	$category = array(
			'ID' => intval($_POST['ID']),
			'Name' => escape($_POST['Name']),
			'Image' => escape($_POST['Image']),
			'Icon' => escape($_POST['Icon'])
	);
	save('categories', $category);
	header('location:admin.php?controller=category');
} else {
	
}

if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid=0;

//data
$title = ($cid==0) ? 'Insert Category' : 'Edit Category';
$user = $_SESSION['user'];
$category = get_a_record('categories', $cid);

//load view
require('backend/views/category/edit.php');