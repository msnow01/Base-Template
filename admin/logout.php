<?php
session_start();
$dir = "../";
if (session_destroy()) {
    $location = "location: ".$dir."admin/login.php";
    header($location);
}
?>
