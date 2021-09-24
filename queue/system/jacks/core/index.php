<?php
    $counter = "SELECT current_queue FROM queue_status";
    $total_counters = $db_connection->query($counter)->fetch_assoc()['current_queue'];
?>
<div id="main" class="col-md-10 mt-5 float-md-right">
    <h2 class="mt-4">Dashboard</h2>
    <p>Your Counter No: <span class="text-capitalize"> <?php echo $_SESSION['admin_name'] ?></span></p>
    <div class="row mt-3">
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-header bg-danger text-light">
                    <a href="counter_status" class="text-light">Current Queue</a>
                </div>
                <div class="card-body">
                    <h1 class="card-title"><?php echo $total_counters ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-9 mb-3">
            <div class="form-group">
                <a href="javascript:;" id="nextToken" class="btn btn-primary btn-lg btn-block">Next Token</a>
            </div>
            <div class="form-group">
                <a href="javascript:;" id="closeCounter" class="btn btn-danger btn-lg btn-block">Close Counter</a>
            </div>
        </div>
    </div>
</div>