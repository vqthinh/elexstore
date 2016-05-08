<?php
//load model

//data
$cid = intval($_GET['cid']);
$category = get_a_record('categories', $cid);

if (!$category) {
    header('Location: '.base_url('404.php'));
}

$title = $category['Name'];

$categories = get_all('categories', array(
    'select' => 'ID, Name',
));

if(isset($_GET['page'])) $page = intval($_GET['page']);
else $page = 1;

$page = ($page>0) ? $page : 1;
$limit = 6;
$offset = ($page - 1) * $limit;

$options = array(
    'where' => 'CategoryID='.$cid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'ID ASC'
);

$url = 'index.php?controller=product&action=category&cid='.$cid;
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

$products = get_all('products', $options);
$pagination = pagination($url, $page, $total);

//list random

$optionsRandom = array(
    'order_by' => 'RAND()',
    'limit' => '5',
    'offset' => '0'
);
$listRandom = get_all('products',$optionsRandom);

//load view
require('frontend/views/product/category.php');