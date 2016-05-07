<?php
function suppliers_delete($id) {
    $id = intval($id);

    //xóa sản phẩm
    require_once('backend/models/suppliers.php');

    $options = array(
        'select' => 'ID',
        'where' => 'SupplierID='.$id
    );
    $products = get_all('products', $options);

    foreach ($products as $product) {
        products_delete($product['ID']);
    }

    //xóa danh mục
    $sql = "DELETE FROM suppliers WHERE ID=$id";
    mysql_query($sql) or die(mysql_error());
}