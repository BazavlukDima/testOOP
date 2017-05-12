<?php

if (!empty($_POST['lol'])) {
    require_once ('controller/main_controller.php');
    $prod = new mainController();
    return $prod->prodAction();
    exit;
}
