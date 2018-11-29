<!DOCTYPE html>
<html>
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
        
	<!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//lib/jquery-1.10.2.min.js"></script>
        
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
        

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fancyBox//source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fancyBox//source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fancyBox//source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url();?>template/fancyBox//source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
        
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
    
    <section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Let's begin your dream together... We have work in </h2>
                <hr class="light">
            </div>
        </div>
    </div>  
    </section>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                     <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg1.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/1.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                      <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg2.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/2.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                      <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg3.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/3.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                     <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg4.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/4.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                      <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg5.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/5.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                      <a class="fancybox" href="<?php echo base_url();?>template/img/portfolio/lg6.jpg" data-fancybox-group="gallery" title="D.andD. Pvt. Ltd.">
                        <img src="<?php echo base_url();?>template/img/portfolio/thumbs/6.jpg"  class="img-responsive" alt="" />
                    </a>
                </div>
            </div>
            
        </div>
    </section>	
<footer class="bg-danger row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-xs-4 col-sm-2 ">
                    <h5>Links</h5>
                    <ul  class="list-unstyled">
                        <li> <?php echo anchor('Welcome/index','Home');?></li>
                        <li><?php echo anchor('Welcome/about','About');?></li>
                        <li><?php echo anchor('Welcome/services','Services');?></li>
                        <li> <?php echo anchor('Welcome/portfolio','Portfolio');?></li>
                        <li> <?php echo anchor('Welcome/contact','Contact');?></li>
                    </ul>
                </div>
                <div class="col-xs-8 col-sm-4 ">
                    <h5>Our Address</h5>
                    <address>
                      D.and D. Design Pvt Ltd<br>
                      Jwagal, Lalitpur<br>
                      Nepal<br>
                      <i class="fa fa-phone"></i>: +977 98416 86393 <br>
                        <i class="fa fa-envelope"></i>: 
                        <a class="email-tag" href="mailto:dnd_design@com.np">dandddesignpvtltd@gmail.com
</a>
                   </address>
                </div>
                <div class="col-xs-12 col-sm-6">
                   <div class="nav navbar-nav" style="padding: 40px;">
                        <ul class="list-inline social_nav">
                            <li><a class="btn btn-social-icon btn-google-plus" href="http://google.com/+" data-toggle="tooltip" data-placement="bottom" title="google+" ><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/pages/D-AND-D-DESIGN-PVT-LTD/1653463648199400?pnref=about.overview" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" data-toggle="tooltip" data-placement="bottom" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn btn-social-icon btn-instagram" href="http://instagarm.com/" data-toggle="tooltip" data-placement="bottom" title="intagram"><i class="fa fa-instagram" ></i></a></li>
                            <li><a class="btn btn-social-icon" href="mailto:" data-toggle="tooltip" data-placement="bottom" title="email me"><i class="fa fa-envelope-o" ></i></a></li>
                        </ul>     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                   <p align=center>&copy D.and D.Design Pvt. Ltd. 2016</p> 
                   <p align=center>Develop by <a href="mailto:mgrkamal512@gmail.com">mgrkamal512@gmail.com</a></p>
                </div>
            </div>
        </div
    </footer>
       
         <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>template/js/bootstrap.min.js"></script>
        
          <!-- Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>template/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>template/js/jquery.fittext.js"></script>
        <script src="<?php echo base_url(); ?>template/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>template/js/lightbox.js"></script>
        
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>template/js/creative.js"></script>
        
        <!-- Add mousewheel plugin (this is optional) -->
        <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip(); 
                });
        </script>


</body>

</html>