﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Station Shop</title>
<link rel="stylesheet" type="text/css" href="css/adminstyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
<style>
	
	.hide{ display:none !important;  /*visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong><?php if(isset($_SESSION['name']) != ""){ $name = $_SESSION['name']; echo $name; } else if(!isset($_SESSION['name'])) { echo ""; }; ?></strong> [ <a href="<?php //rocess/logout_admin.php ?>">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
               
                
					<p><strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> <?php #ini adalah menu ?>
			<ul>
				<li class="upp"><a href="#">News</a>
					<!-- <ul class="hide">
						<li>&#8250; <a href="">News </a></li>
						<li>&#8250; <a href="">Comment News</a></li>
						<li>&#8250; <a href="">Member </a></li>
						<li>&#8250; <a href="">Product</a></li>
                        <li>&#8250; <a href="">Contact </a></li>
					</ul>-->
				</li>
				<li class="upp "><a href="#">Member</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all pages</a></li>
						<li>&#8250; <a href="">Add new page</a></li>
						<li>&#8250; <a href="">Add new gallery</a></li>
						<li>&#8250; <a href="">Categories</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">User</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">Product</a>
					<ul class="hide">
						<li>&#8250; <a href="">Site configuration</a></li>
						<li>&#8250; <a href="">Contact Form</a></li>
					</ul>
				</li>
                <li class="upp "><a href="#">Contact</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="member_admin.php">Member</a></li>
					<li class="b2"><a class="icon config" href="user_admin.php">User </a></li>
					
					<li class="b2"><a class="icon product" href="product_admin.php">Product</a></li>
                    
                    <li class="b2"><a class="icon contact" href="contact_admin.php">Contact</a></li>
				</ul>
			</div>
			
			<div class="box hide">
				<div class="h_title">&#8250; Manage content</div>
				<ul>
					<li class="b1"><a class="icon page" href="">Show all pages</a></li>
					<li class="b2"><a class="icon add_page" href="">Add new page</a></li>
					<li class="b1"><a class="icon photo" href="">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="">Categories</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="">Show all users</a></li>
					<li class="b2"><a class="icon add_user" href="">Add new user</a></li>
					<li class="b1"><a class="icon block_users" href="">Lock users</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Settings</div>
				<ul>
					<li class="b1"><a class="icon config" href="">Site configuration</a></li>
					<li class="b2"><a class="icon contact" href="">Contact Form</a></li>
				</ul>
			</div>
		</div>
        
        
        
		<div id="main">
        
        
		  <div class="clear"></div>
          <div class="full_w">
				<div class="h_title">Manage pages - table</div>
				  &nbsp;
				</div>
			
			
			
		</div>
            
            
         
            
	  </div>
	 <div class="clear"></div>
	</div> <?php ?> 
    
    	<?php
			
			// akhir dari product_admin.php
		
		?>

	<div id="footer">
		<div class="left">
			<p>Design: <a href="http://kilab.pl">Paweł Balicki</a> | Admin Panel: <a href="">YourSite.com</a></p>
		</div>
		<div class="right">
			<p><a href="">Example link 1</a> | <a href="">Example link 2</a></p>
		</div>
	</div>
</div>

</body>
</html>
