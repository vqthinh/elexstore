<?php
/**
 * Xóa bản ghi có khóa chính là $id
 * @param $id
 */
function products_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM products WHERE ID=$id";
    mysql_query($sql) or die(mysql_error());
}