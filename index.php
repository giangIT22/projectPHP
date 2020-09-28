<?php
session_start();
require './Core/UploadFile.php';
require './Core/Database.php';
require './Helper/Common.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
$controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? 'home')) .'Controller');

$moduleName = $_GET['module'] ?? null;

$actionName = $_REQUEST['action'] ?? 'index';

if($moduleName === 'backend'){
    $controllerFile = "./Controllers/Backend/${controllerName}.php";
}else{
    $controllerFile = "./Controllers/${controllerName}.php";
}

if(file_exists($controllerFile)){
    require $controllerFile;
}else{
    echo "<h1>Không tìm thấy ${controllerName}</h1>";
    die();
}

$object1 = new $controllerName;

if(method_exists($object1, $actionName)){
    $object1->$actionName();
}
else{
    echo "<h2>Không tìm thấy method: ${actionName} ở trong ${controllerName}</h2>";
}

