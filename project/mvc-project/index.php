<?php

require './Core/Database.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
$controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'welcome') . 'Controller');
 

$actionName = $_REQUEST['action'] ?? 'index';
require "./Controllers/${controllerName}.php";

$object1 = new $controllerName;

$object1->$actionName();
