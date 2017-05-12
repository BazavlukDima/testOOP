<?php

if (!empty($_POST['code'])) {
    require_once ('controller/main_controller.php');
    $subType = new mainController();
    return $subType->subTypeAction();
    exit;
}
