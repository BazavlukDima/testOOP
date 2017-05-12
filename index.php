<?php
require_once ('controller/main_controller.php');

$mainController = new MainController();
//$mainController->viewReturn();
// var_dump($_POST);
switch ($_POST) {
    case is_null($_POST):
        $mainController->viewReturn();
    break;

    case !is_null(@$_POST['code']):
        return $mainController->subTypeAction();
    break;

    case!is_null($_POST['lol']):
        return $mainController->prodAction();
    break;
}