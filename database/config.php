<?php 
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'music_db';

    $conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connection_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

?>