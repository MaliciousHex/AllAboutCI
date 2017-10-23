<?php 
	if(!$this->session->has_userdata('username')){
		redirect(base_url() . "AdminLogin");
	}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Station Shop</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/adminstyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navi.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();  ?>js/jquery-1.7.2.min.js"></script>
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
				<p>Welcome, <strong><?php if($this->session->has_userdata("username")){ ?> <?php echo $this->session->userdata("username"); ?> <?php } ?></strong> [ <a href="<?php echo base_url(); ?>AdminLogin/logOut">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
               
                
					<p><strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> <?php #ini adalah menu ?>
			<ul>
				<li class="upp"><a href="<?php echo base_url(); ?>#">News</a>
					<!-- <ul class="hide">
						<li>&#8250; <a href="<?php echo base_url(); ?>">News </a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Comment News</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Member </a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Product</a></li>
                        <li>&#8250; <a href="<?php echo base_url(); ?>">Contact </a></li>
					</ul>-->
				</li>
				<li class="upp "><a href="<?php echo base_url(); ?>#">Member</a>
					<ul class="hide">
						<li>&#8250; <a href="<?php echo base_url(); ?>">Show all pages</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Add new page</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Add new gallery</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Categories</a></li>
					</ul>
				</li>
				<li class="upp "><a href="<?php echo base_url(); ?>#">User</a>
					<ul class="hide">
						<li>&#8250; <a href="<?php echo base_url(); ?>">Show all uses</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Add new user</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Lock users</a></li>
					</ul>
				</li>
				<li class="upp "><a href="<?php echo base_url(); ?>#">Product</a>
					<ul class="hide">
						<li>&#8250; <a href="<?php echo base_url(); ?>">Site configuration</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Contact Form</a></li>
					</ul>
				</li>
                <li class="upp "><a href="<?php echo base_url(); ?>#">Contact</a>
					<ul class="hide">
						<li>&#8250; <a href="<?php echo base_url(); ?>">Show all uses</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Add new user</a></li>
						<li>&#8250; <a href="<?php echo base_url(); ?>">Lock users</a></li>
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
					<li class="b1"><a class="icon page" href="<?php echo base_url(); ?>news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="<?php echo base_url(); ?>member_admin.php">Member</a></li>
					<li class="b2"><a class="icon config" href="<?php echo base_url(); ?>user_admin.php">User </a></li>
					
					<li class="b2"><a class="icon product" href="<?php echo base_url(); ?>product_admin.php">Product</a></li>
                    
                    <li class="b2"><a class="icon contact" href="<?php echo base_url(); ?>contact_admin.php">Contact</a></li>
				</ul>
			</div>
			
			<div class="box hide">
				<div class="h_title">&#8250; Manage content</div>
				<ul>
					<li class="b1"><a class="icon page" href="<?php echo base_url(); ?>">Show all pages</a></li>
					<li class="b2"><a class="icon add_page" href="<?php echo base_url(); ?>">Add new page</a></li>
					<li class="b1"><a class="icon photo" href="<?php echo base_url(); ?>">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="<?php echo base_url(); ?>">Categories</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="<?php echo base_url(); ?>">Show all users</a></li>
					<li class="b2"><a class="icon add_user" href="<?php echo base_url(); ?>">Add new user</a></li>
					<li class="b1"><a class="icon block_users" href="<?php echo base_url(); ?>">Lock users</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Settings</div>
				<ul>
					<li class="b1"><a class="icon config" href="<?php echo base_url(); ?>">Site configuration</a></li>
					<li class="b2"><a class="icon contact" href="<?php echo base_url(); ?>">Contact Form</a></li>
				</ul>
			</div>
		</div>
        
        
        
		<div id="main">
        
        
		  <div class="clear"></div>
          <div class="full_w">
				<div class="h_title">Manage pages - table</div>
				  <?php 
					  if (isset($content_page)) {
						  $this->load->view("admin/" . $content_page);
					  }
				  ?>
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
			<p>Design: <a href="<?php echo base_url(); ?>http://kilab.pl">Paweł Balicki</a> | Admin Panel: <a href="<?php echo base_url(); ?>">YourSite.com</a></p>
		</div>
		<div class="right">
			<p><a href="<?php echo base_url(); ?>">Example link 1</a> | <a href="<?php echo base_url(); ?>">Example link 2</a></p>
		</div>
	</div>
</div>

</body>
</html>
<?php  ?>