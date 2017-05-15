<?php
require_once ('controller/main_controller.php');

$mainController = new MainController();
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    $mainController->viewReturn();
} else {
    switch ($_POST) {
    // case empty($_POST):
    //     $data = $mainController->typeAction();
    // break;

    case !empty($_POST['code']):
        return $mainController->subTypeAction();
    break;

    case !empty($_POST['lol']):
        return $mainController->prodAction();
    break;
    }
}
