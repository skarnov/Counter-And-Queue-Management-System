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
    </head>

    <body>
        <script>
            var jQ = new Array();            
        </script>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-secondary">
            <a class="navbar-brand" href="javascript:;"><?php echo $config['title'] ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $config['url'] ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $config['url'] ?>counters">Counters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $config['url'] ?>display" target="_blank">Display</a>
                    </li>
                </ul>
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link text-light" href="<?php echo $config['url'] ?>logout">Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>