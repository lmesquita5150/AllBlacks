<?php

require_once('./config/connect.php');
require_once('./controller/clientesController.php');

$controller = new clientesController;

header('Content-Type: application/json');

if ($_POST && isset($_POST['action'])) {
    $action = $_POST['action'];

    $data = array();

    switch($action) {
        case 'getAll':
            $data = $controller->{$action}();
            break;
        case 'insert':
            $data = $controller->xmlUpload();
            break;
        case 'update':
            $data = $controller->{$action}($_POST);
            break;
    }

    echo json_encode($data);
}