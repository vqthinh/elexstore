<?php
$error = array();
function user_login($username, $password) {
        global $error;
    $user = db_user_get_by_username($username);
    if(empty($user)){
        echo json_encode(array(
            'valid' => false,
        ));
        $error['username'] = "Invalid Username";
    }elseif($user['Password']!=$password){
        echo json_encode(array(
            'valid' => true,
        ));
        $error['password'] = "Invalid Password";
    }elseif(!$error){
            set_logged($user);
    }
}

function db_user_get_by_username($username){
    $username = addslashes($username);
    $sql = "SELECT * FROM users where UserName = '{$username}'";
    return db_get_row($sql);
}