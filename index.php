<?php
require_once('Controller.php');
session_start();
$controller = new Controller();
$controller->run();
?>
