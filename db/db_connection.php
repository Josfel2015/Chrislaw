<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "chrislaw_db";

    $conn = new mysqli($server, $user, $password, $db);

    if (!$conn) {
        die("Connection failed:" . $conn->connect_error());
    }
?>