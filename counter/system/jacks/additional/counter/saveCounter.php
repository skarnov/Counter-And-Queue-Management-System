<?php

    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');
    $created_at = date('Y-m-d H:i:s');
    $created_by = $_SESSION['admin_id'];

    $sql = "INSERT INTO users
                        (user_name, user_password, created_at, created_by)
                VALUES ('$name', '$password', '$created_at', '$created_by')";
    
    $result = $db_connection->query($sql);

    if ($result) {
        echo 'success';
    } else {
        echo 'failed';
    }
