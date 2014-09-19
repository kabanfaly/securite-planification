<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/style.css" >
        <?php
        echo '<script type="text/javascript">' .
            'var baseUrl = "'.  base_url(). '";'.
        '</script>'
        ?>
        <script type="text/javascript" data-main="<?php echo base_url(); ?>js/main" src="<?php echo base_url(); ?>js/require.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <nav class="nav-tabs">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>index.php/agent"><span id="add_tab">Gestion des agents</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/site"><span id="add_tab">Gestion des sites</span></a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/ville"><span id="add_tab">Gestion des ville</span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-10">





