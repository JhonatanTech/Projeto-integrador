<?php
session_start();

var_dump($_SESSION);
die();

if (!$_SESSION['usuario']) {
    header('Location: ../index.php');
    exit();
}