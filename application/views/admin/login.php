<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_asset(); ?>Library/bootstrap-4.1.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_asset(); ?>css/main.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
         <script src="<?php echo base_asset(); ?>Library/jquery-3.3.1.js"></script>
        <script src="<?php echo base_asset(); ?>Library/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_asset(); ?>Library/dataTables.bootstrap4.min.js"></script>
    </head>
    <body>
        <div class="wrapper-login">
            <div class="container login-container">
                <!--<h2>Stacked form</h2>-->

                <?php
                if (!empty($status)) {
                    echo '<div class="alert alert-danger">' .
                    '<strong>'.$status.'!</strong>' .
                    '</div>';
                }
                ?>
                <?php echo form_open('admin/login/aksi_login/'); ?>
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="username" class="form-control" id="email" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close(); ?>
            </div>

        </div>
    </body>
</html>
