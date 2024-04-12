<?php
session_start();
    $myid = $_SESSION['id'];
    if (!isset($_SESSION['password'])) {
        header("location:../");
    }

?>