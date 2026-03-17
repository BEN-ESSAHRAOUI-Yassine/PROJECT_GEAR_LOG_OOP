<?php
require '../app/Core/Database.php';

$controller = $_GET['controller'] ?? 'asset';
$action = $_GET['action'] ?? 'index';

if ($controller === 'user') {
    require '../app/Controllers/UserController.php';
    $c = new UserController();
} else {
    require '../app/Controllers/AssetController.php';
    $c = new AssetController();
}

$c->$action();