<?php
session_start();
//http://localhost?controller=employee&action=index
// Lấy ra controller
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'employee';
// Lấy ra action
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller);
$fileController = $controller . "Controller.php";

$pathController = "controllers/$fileController";

if(!file_exists($pathController)){
    die("Trang ban tim khong ton tai");
}
require_once "$pathController";