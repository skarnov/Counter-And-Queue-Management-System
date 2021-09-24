<?php
    $sql = "SELECT "
            . "users.user_name, counters.current_queue "
            . "FROM users "
            . "LEFT JOIN counters ON counters.user_id = users.user_id";
    $result = $db_connection->query($sql);
?>
<div id="main" class="col-md-10 mt-5 float-md-right">
    <h2 class="mt-4">Counters Management</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $config['url'] ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="add_counter">Add New Counter</a></li>
            <li class="breadcrumb-item active" aria-current="page">Counters Management</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="table-responsive">
                <?php
                if ($result->num_rows > 0) {
                    ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 30%">Counter Name</th>
                                <th style="width: 60%">Current Queue</th>
                                <th style="width: 10%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="text-capitalize"><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['current_queue'] ?></td>
                                    <td>
                                        <?php
                                        if ($row['current_queue']) {
                                            echo '<span class="badge badge-success">Active</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Inactive</span>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo '<h3 class="bg-danger p-3 text-light">No Record Found</h3>';
                }
                ?>
            </div>
        </div>
    </div>
</div>