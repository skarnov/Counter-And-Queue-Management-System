<?php

    $current_queue = filter_input(INPUT_POST, 'current_queue');
    $queue_id = filter_input(INPUT_POST, 'queue_id');
    $modified_at = date('Y-m-d H:i:s');
    $modified_by = $_SESSION['admin_id'];

    $sql = "UPDATE queue_status
                SET current_queue = '$current_queue',
                    modified_at = '$modified_at',
                    modified_by = '$modified_by'
                WHERE queue_id = '$queue_id'";
    
    $result = $db_connection->query($sql);

    if ($result) {
        echo 'success';
    } else {
        echo 'failed';
    }
