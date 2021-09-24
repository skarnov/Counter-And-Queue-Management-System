<?php

    $user_id = $_SESSION['admin_id'];
    $modified_at = date('Y-m-d H:i:s');
    $modified_by = $_SESSION['admin_id'];

    $counter = "UPDATE counters
                        SET counter_status = 'inactive',
                            modified_at = '$modified_at',
                            modified_by = '$modified_by'
                    WHERE user_id = '$user_id'";

    $result = $db_connection->query($counter);

    echo $result;