<?php

    $servername = 'localhost';
    $username = 'evistech_u';
    $password = 'A56942512B@';
    $dbname = 'evistech_queue';
    
    $db_connection = new mysqli($servername, $username, $password, $dbname);
    
    if ($db_connection->connect_error) {
        die('Connection Failed: ' . $db_connection->connect_error);
    }