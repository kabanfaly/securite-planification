<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/jquery/jquery-ui.css" >
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/style.css" >
        <script src="<?php echo base_url(); ?>js/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>js/knockout/knockout.js"></script>
        <script src="<?php echo base_url(); ?>js/script.js"></script>
    </head>
    <body>
        <div id="header">

        </div>
        <div id="content">
            <div id="leftMenu">
                <ul>
                    <li><span id="add_tab">Gestion des agents</span></li>
                    <li><span id="add_tab">Gestion des sites</span></li>
                    <li><span id="add_tab">Gestion des ville</span></li>
                </ul>
            </div>
            <div id="mainContent">
                <div id="tabs">
                    <ul>
                        <!--<li><a href="#tabs-1">Gestion des agents</a> <span class="ui-icon ui-icon-close" role="presentation">Remove Tab</span></li>-->
                    </ul>
                    <div id="tabs-1">
                        <p></p>
                    </div>
                </div>

