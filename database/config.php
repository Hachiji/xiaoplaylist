<?php 
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'music_db';

    $conn = new mysqli($host, $username, $pass, $dbname);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

?>