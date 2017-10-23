<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.indopeo.com/demo/mimity/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 27 Jun 2014 06:52:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Mimity</title>
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
</head>
<body>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="<?php echo base_url(); ?>index.html">
	            			Mimity <span>Online Shop</span>
	            		</a>
	            		<div>Lorem ipsum dolor sit amet.</div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div class="well">
	                    <form action="#">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-5">
	                <div class="well">
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
	                            <span class="pull-left">Shopping Cart: 2 item(s)</span>
	                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
	                        </button>
	                        <ul class="dropdown-menu cart-content" role="menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>detail.html">
                                        <b>Penn State College T-Shirt</b>
                                        <span>x1 $528.96</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>detail.html">
                                        <b>Live Nation ACDC Gray T-Shirt</b>
                                        <span>x1 $428.96</span>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="cart.html">Total: $957.92</a></li>
                            </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
	        </div>
	    </div>
    </header>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <?php $this->load->view('menu_layout');  ?>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
        <?php
				if(isset($content_page)){
                    $this->load->view($content_page);
                }
		 ?>
		
	</div>

	<footer>
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Information</h4>
        			<ul>
        				<li><a href="<?php echo base_url(); ?>about.html">About Us</a></li>
        				<li><a href="<?php echo base_url(); ?>typography.html">Policy Privacy</a></li>
        				<li><a href="<?php echo base_url(); ?>typography.html">Terms and Conditions</a></li>
        				<li><a href="<?php echo base_url(); ?>typography.html">Shipping Methods</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Categories</h4>
        			<ul>
                        <?php foreach ($categories as $rows) { ?>
                            <li><a href="<?php echo base_url(); ?>Product/productsBrand/<?php echo $rows["brand_id"]; ?>"><?php echo $rows["brand_name"] ?></a></li>
                        <?php } ?>
        				
        				
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="<?php echo base_url(); ?>contact.html">Contact Us</a></li>
        				<li><a href="#">LINE: harry_ermawan</a></li>
        				<li><a href="#">Telp: 0883820202307</a></li>
        				<li><a href="#">Email: harryermawan@gmail.com</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Follow Us</h4>
        			<ul class="social">
        				<li><a href="#">Google Plus</a></li>
        				<li><a href="#">Facebook</a></li>
        				<li><a href="#">Twitter</a></li>
        				<li><a href="#">RSS Feed</a></li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="navbar-inverse text-center copyright">
        	Copyright &copy; 2017 Mimity All right reserved
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.blImageCenter.js"></script>
    <script src="<?php echo base_url(); ?>js/mimity.js"></script>
</body>

<!-- Mirrored from demo.indopeo.com/demo/mimity/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 27 Jun 2014 06:52:36 GMT -->
</html>