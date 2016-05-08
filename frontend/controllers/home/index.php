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

$title = 'ELEX Store';

require('frontend/views/home/index.php');
