<?php
    $counter = "SELECT user_id, current_queue FROM counters";
    $total_counters = $db_connection->query($counter);
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $config['title'] ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="<?php echo $config['url'] ?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo $config['url'] ?>>assets/img/favicon.ico">
        <style type="text/css">
            .token{
                font-size: 50px;
                border: 2px solid red;
                padding: 3%;
            }

            .counter{
                font-size: 50px;
                border: 2px solid black;
                padding: 6%;
                box-shadow: 0px 0px 0px 1px lime;
                color: red;
            }
        </style>
    </head>

    <body>
        <div class="container p-3">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Token</h1>
                </div>
                <div class="col-lg-4">
                    <h1>Counter</h1>
                </div>
            </div>
            <?php
            while ($row = $total_counters->fetch_assoc()) {
                ?>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="token"><?php echo $row['user_id'] ?></p>
                    </div>
                    <div class="col-lg-4">
                        <p class="counter"><?php echo $row['current_queue'] ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>