<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sample Tracker</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>admin/backEnd/assets/scss/style.css">
    <link href="<?php echo base_url()?>admin/backEnd/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="open">


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
                <?php
                $message=$this->session->userdata('user_name');
                echo "$message";
                ?>
            </a>
            <a class="navbar-brand hidden" href="./"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url()?>Welcome/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>






                <li class="menu">
                    <a href="<?php echo base_url()?>Welcome/add_category"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Category</a>
                    <a href="<?php echo base_url()?>Welcome/add_sub_category"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sub-Category</a>
                    <a href="<?php echo base_url()?>Welcome/admin_order"   aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>See-Order</a>
                </li>

<!--                <li class="menu-item-has-children dropdown">-->
<!--                    <a href="--><?php //echo base_url()?><!--welcome/add_inventory" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Visitor Schedule</a>-->
<!--                    <ul class="sub-menu children dropdown-menu">-->
<!---->
<!--                    </ul>-->
<!--                </li>-->




            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

            </div>



            <div class="col-sm-5">
                <div class="user-area dropdown float-right">



                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <img class="user-avatar rounded-circle" src="<?php echo base_url()?>backEnd/images/admin.jpg" alt="User Avatar">

                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>
                            <?php
                            $message=$this->session->userdata('name');
                            echo "$message";
                            ?>
                        </a>
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                        <a class="nav-link" href="<?php echo base_url()?>Welcome/logout"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>



            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">

        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>

                </div>
            </div>
        </div>
<!--        <div class="col-sm-4">-->
<!--            <div class="page-header float-left">-->
<!--                <div class="page-title">-->
<!--                    <form action="--><?php //echo base_url()?><!--welcome/search" method="post">-->
<!--                        <input type="date" placeholder="Search.." name="date">-->
<!--                        <button type="submit">Search</button>-->
<!--                    </form>-->
<!---->
<!--                    <!--<button type="submit"<i class="menu-icon fa fa-th"></i><a href="--><?php //echo base_url()?><!--welcome/add_schedule_form">Add Visitor schedule</a></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="col-sm-4">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
<!--                        <li class="active">Home-><a href="--><?php //echo base_url()?><!--welcome/manage_schedule">Visit List</a></li>-->
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php echo $kabir?>
    <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="<?php echo base_url()?>admin/backEnd/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/plugins.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/main.js"></script>


<script src="<?php echo base_url()?>admin/backEnd/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/dashboard.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/widgets.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?php echo base_url()?>admin/backEnd/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
