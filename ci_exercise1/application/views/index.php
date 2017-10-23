<!DOCTYPE html>

<head>

	

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Avaya Shoes Store</title>

    

    <link href="<?php echo base_url()?>images/1386061917_96324.ico"  rel="shortcut icon" type="image/x-icon"  />

    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url()?>nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ddsmoothmenu.css" />

    <link href="<?php echo base_url()?>css/lightbox.css" rel="stylesheet" /> 
    
    <!--<link href="css/screen.css" rel="stylesheet">-->

    <link href="js/js-image-slider.css" rel="stylesheet" type="text/css" />

    

    <script src="<?php echo base_url()?>js/jquery-2.0.3.min.js"></script> <!-- Hanya bisa pake ini jquery nya -->

    <script src="<?php echo base_url()?>js/js-image-slider.js" type="text/jscript" /></script>

    <!-- <script src="<?php echo base_url()?>js/jquery.tools.min.js" type="text/javascript"></script>  BENTROK PAK LE SCRIPT NYOO --> 

    <script type="text/javascript" src="<?php echo base_url()?>js/ddsmoothmenu.js"></script>

    <script src="<?php echo base_url()?>js/lightbox.js"></script>

    

    <script type="text/javascript">		

		//alert("lalalala");		

		

		//var no = jQuery.noConflict(); // biar gak bentrok scriptnya 

		

		/* no(document).ready(function() {

			

			ddsmoothmenu.init({

				mainmenuid: "top_nav", //menu DIV id

				orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"

				classname: 'ddsmoothmenu', //class added to menu's outer DIV

				//customtheme: ["#1c5a80", "#18374a"],

				contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]

				

			})

			

        }); */

		

		

		

    </script>



</head>



<body>

  <img id="preloader" src="<?php echo base_url()?>asset/loader.gif">

  <div id="body_wrapper">



    <div id="wrapper">

<!--THIS IS HEADER -->



	<div id="header">

    	<!--- start header -->
        	

	<div id="site_title"><h1><a href="#">Online Shoes Store</a></h1></div>

        <div id="header_right">

        	<p>

	        <a href="<?php echo base_url(); ?>index.php?customer_detail">My Account</a> | <a href="<?php echo base_url(); ?>">My Wishlist</a> | <a href="<?php echo base_url(); ?>shoppingcart.php">My Cart</a> | <a href="<?php echo base_url(); ?>index.php?checkout">Checkout</a></p>

            <p>

            	Shopping Cart: <span id="totalqty"><strong>0 items</strong></span> ( <a href="<?php echo base_url(); ?>index.php?shoppingcart">Show Cart</a> )

			</p>

		</div>

        <div class="cleaner"><div id="lala"></div></div>

        
        
        <!--- End Header -->

    </div> 

   

<!-- END OF HEADER-->

    

    <div id="templatemo_menubar">

    	<!--- start menu -->
        
        <div id="top_nav" class="ddsmoothmenu">

            <ul>

                <li><a href="<?php echo base_url() ?>Home" class="<?php if(isset($_GET['home'])){echo "selected";} ?>">Home</a></li>

                <li><a href="<?php echo base_url() ?>Product" class="<?php if(isset($_GET['products'])){echo "selected";} ?>">Products</a>

                    <ul>

                    

                         <?php 
                      foreach($catagories as $rows){
                    ?>
                    
                       <li class="first"><a href="<?php echo base_url(); ?>Product/productsBrand/<?php echo $rows["brand_id"]; ?>"><?php echo $rows["brand_name"]; ?></a></li>
                    
                    <?php 
                      }
                     ?>

                  </ul>

                </li>

                <li><a href="<?php echo base_url() ?>About" class="<?php if(isset($_GET['about'])){echo "selected";} ?>">About</a>

                </li>

                <li><a href="<?php echo base_url() ?>Faqs" class="<?php if(isset($_GET['faqs'])){echo "selected";} ?>">FAQs</a></li>

                <li><a href="<?php echo base_url() ?>Contact" class="<?php if(isset($_GET['contact'])){echo "selected";} ?>">Contact Us</a></li>

            </ul>

            <br style="clear: left" />

     </div>


        
        <!-- end menu-->
             

        <div id="templatemo_search">

                <form action="index.php" method="get">

                	<input type="hidden" name="products"/>

                  <input type="text" value="" name="s" id="s" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />

                  <input type="submit" name="" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />

                </form>

        </div> 

    </div> 

<!--  END OF MENU & SEARCH FORM--> 

    <div id="templatemo_main">

    

    	<div id="sidebar" class="float_l">


          <!--- start login --> 
            <div id="login_info" class="sidebar_box">
   <div style="padding:8px;">
     <div>Halo selamat Datang , </div> 
     <div><span id="customer_name_active"></span></div>
     <div>
       <a href="process/logout.php" style="margin-right:10px;">Log Out</a>
       <a href="index.php?customer_detail"> Profile User </a>
     </div>
   </div>
</div>

<div id="login_box" class="sidebar_box" >
            	<span class="bottom"></span>

                <h3>Login</h3>

         	

                <div id="login_form" class="content" style="width:222px;">

                <form action="process/submit_login.php" method="post" name="contact">

                  <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'] ?>" name="this_location"  />

                  <label> Username : </label>

                  <input type="text" name="username" id="username_id" value="" required class="required input_field" />

                  <div class="cleaner h10"></div>

                  <label> Password : </label>

                  <input type="password" name="password" required id="password" value="" class="required input_field" />

                  <div class="cleaner h10"></div>

                  <input class="submit_btn login" name="submit" id="login_submit" value="Login" type="button" style="float:left; margin-right:10px;">

                   <input class="submit_btn sign_up " id="submit" onClick="location.href='index.php?regis'" value="Sign Up" type="button" style="float:left; margin-right:10px;">

           

                </form>

                 <div class="cleaner h10"></div>

                 
                <span id="login_error" class="error" style="color:#F00" >

                Email/Password error!<br />please log in again..

                </span>

          

               </div>      

           

          </div> 


          <!--- end login -->  

          <!--- start login -->  
        		<div class="sidebar_box"><span class="bottom"></span>

            	<h3>Categories</h3>   

                <div class="content"> 

                	<ul class="sidebar_list">

                    <?php 
                      foreach($catagories as $rows){
                    ?>
                    
                    	 <li class="first"><a href="<?php echo base_url(); ?>Product/productsBrand/<?php echo $rows["brand_id"]; ?>"><?php echo $rows["brand_name"]; ?></a></li>
                    
                    <?php 
                      }
                     ?>

                    </ul>

                </div>

    </div>



          <!-- end login -->    
          <!-- Start Side Bar -->
            <div class="sidebar_box"><span class="bottom"></span>

            <h3>Best Sellers </h3>   
        
            <div class="content">
        
                
        
                <div class="bs_box">
        
                    <a href="index.php?detail&shoes_id="><img src="<?php echo base_url()?>images/no_product_image.jpg" /></a>
        
                    <h4><a href="index.php?detail&shoes_id=">Product Name</a></h4>
        
                    <p class="price">Rp. 00</p>
        
                    <div class="cleaner"></div>
        
                </div>
        
                
        
               
        
            </div>
        
        </div>
          <!--- End Side Bar -->   
             

        </div> <!-- END OF SIDE BAR -->

        

        <div id="content" class="float_r">
           <!-- Start main content -->
        	   <?php 

                if(isset($content_page)){
                    $this->load->view($content_page);
                }

             ?>

            

           <!--End main content -->
        </div> <!-- END OF CONTENT FLOAT RIGHT -->

        

        <div class="cleaner"></div>

        

    </div> 

     <div class="cleaner"></div>

<!-- END OF MAIN -->

    

    <div id="templatemo_footer">
         <!--Start Footer content -->
        	
            <p><a href="">Home</a> | <a href="">Products</a> | <a href="">About</a> | <a href="">FAQs</a> | <a href="">Checkout</a> | <a href="">Contact Us</a>

		</p>



    	Copyright © 2013 <a href="#">Avaya Shoes Store</a> | Designed by <a href="http://www.babastudio.com" target="_parent">Baba Studio Web Consultant</a>


            

           <!-- End Footer  content -->
        
    		

    </div> 

<!-- End of footer-->

</div> <!-- END of wrapper -->

</div> <!-- END of body_wrapper -->



</body>

</html>

<script type="text/javascript" language="javascript">
  
  
  $(document).ready(function() {
	 ddsmoothmenu.init({

				mainmenuid: "top_nav", //menu DIV id

				orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"

				classname: 'ddsmoothmenu', //class added to menu's outer DIV

				//customtheme: ["#1c5a80", "#18374a"],

				contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]

				

			})
  });	
   	 
	
</script>