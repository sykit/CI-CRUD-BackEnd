<?php header('Content-Type: text/html; charset=utf-8');?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_asset(); ?>Library/bootstrap-4.1.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_asset(); ?>css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_asset(); ?>Library/jquery-3.3.1.js"></script>
        <script src="<?php echo base_asset(); ?>Library/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_asset(); ?>Library/dataTables.bootstrap4.min.js"></script>
    </head>
    <body >
        <div class="container-fluid">
                <?php include 'navbar.php'; ?>
            <div class="row" style="height: 100%" >
                <div class="col-3 bg-dark ">
                    <div class="list-group">
                        <a href="<?php echo base_url('view_data'); ?>" class="list-group-item list-group-item-action">Lihat Data</a>
                        <a href="<?php echo base_url('add_data'); ?>" class="list-group-item list-group-item-action">Tambah Data</a>
                        <a href="<?php echo base_url('edit_home'); ?>" class="list-group-item list-group-item-action">Edit Home</a>
                        <a href="<?php echo base_url('login/logout'); ?>" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-9 add-padding-top" style="background-image:url(<?php echo base_asset(); ?>Image/background_home.jpg);background-repeat: no-repeat;background-size: cover;overflow-y: scroll">