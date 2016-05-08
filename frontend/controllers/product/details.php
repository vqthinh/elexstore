<?php
//load model

//data
$pid = intval($_GET['pid']);
$product = get_a_record('products', $pid);

if (!$product) {
    header('Location: '.base_url('404.php'));
}

$title = $product['Name'];
$categoryID = $product['CategoryID'];
$options = array(
    'where' => 'CategoryID='.$categoryID.''
);
$listRelated = get_all('products',$options);

$categories = get_all('categories', array(
    'select' => 'ID, Name',
    'order_by' => 'ID ASC'
));

$categoryprd = get_a_record('categories',$categoryID);
//list random product
$optionsRandom = array(
    'order_by' => 'RAND()',
    'limit' => '5',
    'offset' => '0'
);
$listRandom = get_all('products',$optionsRandom);

//load view
require('frontend/views/product/details.php');