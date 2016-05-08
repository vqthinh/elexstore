<?php
require_once("../../models/model.php");
require_once("../../../lib/database.php");
//get search term
$searchTerm = $_GET['term'];
db_connect();

$options = array(
    'where' => "Name LIKE '%".$searchTerm."%'"
);

$productResult = get_all('products',$options);

//return json data
echo json_encode($productResult);
