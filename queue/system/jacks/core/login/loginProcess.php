<?php
        
    $user_name = filter_input(INPUT_POST, 'user_name');
    $user_password = filter_input(INPUT_POST, 'user_password');

    if($user_name != NULL && $user_password != NULL){
        $sql = "SELECT user_id, user_name FROM users WHERE user_name = '$user_name' AND user_password = '$user_password'";
        $result = $db_connection->query($sql);
        
        if ($result->num_rows == '1') {
            $row = $result->fetch_assoc();
            $_SESSION['admin_id'] = $row['user_id'];
            $_SESSION['admin_name'] = $row['user_name'];
            echo 'success';
        }
        else {
            echo 'failed';
        }
    }
    else{
        echo 'Please Enter All Value';
    }