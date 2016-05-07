<?php
// Biến lưu trữ kết nối
$conn = null;

// Hàm kết nối
function db_connect(){
    global $conn;
    if (!$conn){
        $conn = mysql_connect('localhost', 'root', '', 'elexstore')
        or die ('Không thể kết nối CSDL');
        mysql_select_db('elexstore') or die('Could not connect to Database');
        mysql_set_charset('UTF-8');
    }
}

// Hàm ngắt kết nối
function db_close(){
    global $conn;
    if ($conn){
        mysql_close($conn);
    }
}

// Hàm lấy danh sách, kết quả trả về danh sách các record trong một mảng
function db_get_list($sql){
    global $conn;
    $data  = array();
    $result = mysql_query($sql,$conn);
    while ($row = mysql_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

// Hàm lấy chi tiết, dùng select theo ID vì nó trả về 1 record
function db_get_row($sql){
    db_connect();
    global $conn;
    $result = mysql_query($sql,$conn);
    $row = array();
    if (mysql_num_rows($result) > 0){
        $row = mysql_fetch_assoc($result);
        mysql_free_result($result);
    }
    return $row;
}

// Hàm thực thi câu truy  vấn insert, update, delete
function db_execute($sql){
    db_connect();
    global $conn;
    return mysql_query($sql,$conn) or die(mysql_error());
}
