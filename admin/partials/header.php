<?php
// require_once '../partials/header.php';
require_once (realpath(dirname(__FILE__). '/../../partials/header.php'));
if(!isset($_SESSION['user-id'])){
    header('location:' .ROOT_URL .'signin.php');
    die();
}