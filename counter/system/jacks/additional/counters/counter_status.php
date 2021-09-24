<?php 

    $sql = "SELECT * FROM queue_status LIMIT 1";
    $result = $db_connection->query($sql)->fetch_assoc();  
?>
<div id="main" class="col-md-10 mt-5 float-md-right">
    <h2 class="mt-4">Current Queue</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Edit The Queue</li>
        </ol>
    </nav>
    <form id="editQueue">
        <div class="row mt-3">
            <div class="col-md-12" id="result"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Current Queue</label>
                    <input type="text" name="current_queue" value="<?php echo $result['current_queue'] ?>" class="form-control">
                    <input type="hidden" name="queue_id" value="<?php echo $result['queue_id'] ?>">
                </div>
                <button type="submit" id="submitQueueEdit" class="btn btn-success">Edit</button>
            </div>
        </div>
    </form>
</div>
<script>
    jQ.push(function(){
        $('#submitQueueEdit').click(function (e) {
            e.preventDefault();                    
            $.ajax({
                type: 'POST',
                url: 'editQueue',
                data: $('#editQueue').serialize(),
                success: function (data)
                {
                    if (data === 'success') {
                       $('#result').append("<div class='alert alert-danger' role='alert'>Success</div>");
                    } else {
                        alert('Invalid');
                    }
                }
            });
        });
    });
</script>