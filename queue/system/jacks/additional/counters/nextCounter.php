<?php

    $user_id = $_SESSION['admin_id'];
    $modified_at = date('Y-m-d H:i:s');
    $modified_by = $_SESSION['admin_id'];

    $queue = "SELECT current_queue FROM queue_status";
    $current_queue = $db_connection->query($queue)->fetch_assoc();
    
    $next_queue = $current_queue['current_queue'] + 1;
    
    $counter = "SELECT user_id FROM counters WHERE user_id = '$user_id'";
    $select_counter = $db_connection->query($counter)->fetch_assoc();
     
    if($select_counter){
        $counter = "UPDATE counters
                    SET current_queue = '$next_queue',
                        counter_status = 'active',
                        modified_at = '$modified_at',
                        modified_by = '$modified_by'
                WHERE user_id = '$user_id'";
    
        $result['counter_update'] = $db_connection->query($counter);
        
        $sql = "UPDATE queue_status
                    SET current_queue = '$next_queue',
                        modified_at = '$modified_at',
                        modified_by = '$modified_by'";
    
        $result['current_queue'] = $db_connection->query($sql);
    }else{
        $sql = "INSERT INTO counters
                        (user_id, current_queue, modified_at, modified_by)
                VALUES ('$user_id', '$next_queue', '$modified_at', '$modified_by')";
    
        $result['start_counter'] = $db_connection->query($sql);
    }
    
    echo $result;