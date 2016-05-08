<?php
/**
 * Created by PhpStorm.
 * User: welcome
 * Date: 08/05/2016
 * Time: 3:30 PM
 */
$optionSpecial = array(
    'where' => 'Special=1'
);
$listSpecial = get_all('products',$optionSpecial);

$listSuppliers = get_all('suppliers',array());

$categories = get_all('categories', array(
    'select' => 'ID, Name',
    'order_by' => 'ID ASC'
));
//Top sells products
$optionTopSells = array(
  'order_by' => 'Sells DESC',
    'limit' => '3',
    'offset' => '0'
);
$listTopSells = get_all('products',$optionTopSells);
//Top views products
$optionTopViews = array(
    'order_by' => 'Views DESC',
    'limit' => '3',
    'offset' => '0'
);
$listTopViews = get_all('products',$optionTopViews);
//Newest products
$optionNews = array(
    'order_by' => 'ProductDate DESC',
    'limit' => '3',
    'offset' => '0'
);
$listTopNews = get_all('products',$optionNews);

$title = 'ELEX Store';

require('frontend/views/home/index.php');
