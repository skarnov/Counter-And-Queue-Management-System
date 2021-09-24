<?php

    $counter = "SELECT current_queue FROM queue_status";
    $total_counters = $db_connection->query($counter)->fetch_assoc()['current_queue'];
?>
<div id="main" class="col-md-10 mt-5 float-md-right">
    <h2 class="mt-4">Dashboard</h2>
    <div class="row mt-3">
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header bg-danger text-light">
                    <a href="counter_status" class="text-light">Queue Start</a>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><?php echo $total_counters ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>