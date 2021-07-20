<?php
session_start();
if (!isset($_SESSION['login_id'])) {
    $location = "location: ".$dir."home";
    header($location);
}
?>
