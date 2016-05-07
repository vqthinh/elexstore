<?php
// Hàm thiết lập là đã đăng nhập
function set_logged($user){
    session_set('user',$user);
}

// Hàm thiết lập đăng xuất
function set_logout(){
    session_delete('user');
}

// Hàm kiểm tra trạng thái người dùng đã đăng hập chưa
function is_logged(){
    $user = session_get('user');
    return $user;
}

// Hàm kiểm tra có phải là admin hay không
function is_admin(){
    $user  = is_logged();
    if($user){
        return true;
    }
    return false;
}