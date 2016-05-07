<?php
/**
 * Xóa bản ghi có khóa chính là $id
 */
function products_delete($id) {
    $id = intval($id);
    $product = get_a_record('products', $id);
    $sql = "DELETE FROM products WHERE ID=$id";
    mysql_query($sql) or die(mysql_error());
}