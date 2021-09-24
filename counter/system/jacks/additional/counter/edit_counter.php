<div id="main" class="col-md-10 mt-5 float-md-right">
    <h2 class="mt-4">Add New Counter</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $root_url ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="counters">Counter Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Counter</li>
        </ol>
    </nav>
    <form id="saveCounter">
        <div class="row mt-3">
            <div class="col-md-12" id="result"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" id="submitCounter" class="btn btn-success">Save</button>
            </div>
        </div>
    </form>
</div>
<script>
    jQ.push(function(){
        $('#submitCounter').click(function (e) {
            $("#submitCounter").attr("disabled", true);
            $("#submitCounter").html('Processing..');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'saveCounter',
                data: $('#saveCounter').serialize(),
                success: function (data)
                {
                    if (data === 'success') {
                       $("#submitCounter").html('Save');
                       $("#submitCounter").attr("disabled", false);
                       $('#saveCounter')[0].reset();
                       $('#result').append("<div class='alert alert-success' role='alert'>Success</div>");
                    } else {
                        alert('Invalid');
                    }
                }
            });
        });
    });
</script>