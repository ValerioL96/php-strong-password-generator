<?php
session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"]=== true) {
    session_unset();
}
Header("Location: ./login.php");

?>