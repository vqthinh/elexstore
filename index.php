<?php
session_start();

require_once('lib/database.php');
require_once('lib/helper.php');
require_once('lib/role.php');
require_once('lib/session.php');
require_once('lib/function.php');
require_once('frontend/models/model.php');
//require_once('frontend/models/cart.php');
db_connect();
//xử lý request từ trình duyệt và gọi controller / action tương ứng
if(isset($_GET['controller'])) $controller = $_GET['controller'];
else $controller = 'home';

if(isset($_GET['action'])) $action = $_GET['action'];
else $action = 'index';

$file = 'frontend/controllers/'.$controller.'/'.$action.'.php';
if (file_exists($file)) {
    require_once($file);
} else {
    require_once(base_url('404.php'));
}
