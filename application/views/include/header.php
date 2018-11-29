<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>D.and D. Design Pvt. Ltd.</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/font-awesome/css/font-awesome.min.css" type="text/css">
   
    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>template/css/bootstrap-social.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/animate.min.css" type="text/css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/mystyle.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/css/creative.css" type="text/css">
    
    <!--image gallary-->
    <link rel="stylesheet" href="<?php echo base_url();?>template/css/lightbox.css" type="text/css" media="screen" />
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo anchor('Welcome/index','D.and D. Design',['class'=>'navbar-brand page-scroll']);?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <?php echo anchor('Welcome/about','About');?>
                    </li>
                    <li>
                        <?php echo anchor('Welcome/services','Services');?>
                    </li>
                    <li>
                        <?php echo anchor('Welcome/portfolio','Portfolio');?>
                    </li>
                    <li>
                      <?php echo anchor('Welcome/contact','Contact');?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>