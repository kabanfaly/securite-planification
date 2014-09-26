<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/style.css" >      
    </head>
    <body>
        <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="heading">
                    <a href="<?php echo base_url(); ?>">
                        <img width="120" height="40" border="0" title="Planification" alt="Planification" src="<?php echo base_url(); ?>images/logo.png" />
                    </a>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="list-group col-lg-2 fixed">
                        <a href="<?php echo site_url("agent"); ?>" class="<?php echo $active == 'agent' ? 'active' : ' ' ?> list-group-item">
                            <h5 class="list-group-item-heading"><?php echo lang('AGENTS_MANAGEMENT'); ?></h5>
                        </a>
                        <a href="<?php echo site_url("site"); ?>" class="<?php echo $active == 'site' ? 'active' : ' ' ?> list-group-item">
                            <h5 class="list-group-item-heading"><?php echo lang('SITES_MANAGEMENT'); ?></h5>
                        </a>
                        <a href="<?php echo site_url("city"); ?>" class="<?php echo $active == 'city' ? 'active' : ' ' ?> list-group-item">
                            <h5 class="list-group-item-heading"><?php echo lang('CITIES_MANAGEMENT'); ?></h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-9">






