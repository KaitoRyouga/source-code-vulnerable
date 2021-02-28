<?php
    $hostname = '192.168.144.2';
    $username = 'root';
    $password = 'kaitoryouga1@3';
    $dbname = "ctflab";
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if (!$conn) {
        exit();
    }
?>