<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sample Tracker">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>backEnd/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <span style="font-size: 35px; color: #FFFFFF">Login Form</span>
            </div>

            <div class="login-form">

                <?php
                $message=$this->session->userdata('message');
                if($message){
                    echo "<span style='color:#ff2d23'>$message<span>";
                    $this->session->unset_userdata('message');
                }
                ?>
                <form action="<?php echo base_url()?>Welcome/signin" method="post">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
<!--                    <a><b>New Here?</b></a>-->
<!--                    <a href="--><?php //echo base_url('Welcome/user_register')?><!--"><button type="button" id="btnSave"  class="btn btn-primary">Register</button></a>-->
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>backEnd/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url()?>backEnd/assets/js/popper.min.js"></script>
<script src="<?php echo base_url()?>backEnd/assets/js/plugins.js"></script>
<script src="<?php echo base_url()?>backEnd/assets/js/main.js"></script>


</body>
</html>
