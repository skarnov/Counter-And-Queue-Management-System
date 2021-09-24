<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $config['title'] ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="<?php echo $config['url'] ?>assets/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo $config['url'] ?>assets/img/favicon.ico">
    </head>

    <body class="login-body">
        <form id="login" class="admin-login col-md-4 offset-md-4 mt-5 p-3 rounded">
            <div class="text-center mb-4">
                <img src="<?php echo $root_url ?>assets/img/evis-logo.png" width="200" height="100">
            </div>
            <div class="form-group">
                <input type="text" name="user_name" id="user_name" placeholder="User Name" required autofocus="" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="user_password" id="user_password" placeholder="Password" required class="form-control">
            </div>
            <button type="submit" id="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
            <p class="mt-3 mb-3 text-muted text-center">Copyright Lime CMS - <?php echo date('Y') ?> | All Rights Reserved</p>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
            $(function () {
                $('#submit').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'login_process',
                        data: $('#login').serialize(),
                        success: function (data)
                        {
                            if (data === 'success') {
                                window.location = '<?php echo $root_url ?>';
                            } else {
                                alert('Invalid Credentials');
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>