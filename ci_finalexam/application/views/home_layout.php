<div class="row">

        	<!-- Slider -->
        	<div class="col-lg-9 col-md-12">
                <div class="slider">
                    <ul class="bxslider">
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-3.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-1.jpg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Slider -->

			<!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail">
                        	<a href="detail.html" class="link-p first-p">
		                    	<img src="images/product-1.jpg" alt="">
		                    </a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.html">Funkalicious Print T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 928.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
                    </div>
                </div>
            </div>
            <!-- End Product Selection -->
        </div>

        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">CATEGORIES</span>
	            	</div>
					<div class="list-group list-categ">
					<?php foreach ($categories as $rows) { ?>
                          
                            <a href="<?php echo base_url(); ?>Products/productsBrand/<?php echo $rows["brand_id"]; ?>" class="list-group-item"><?php echo $rows["brand_name"] ?></a>

                    <?php } ?>
					</div>
				</div>
				<!-- End Categories -->

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
					
					<?php foreach ($bestseller as $rows) {
					 ?>
		            <div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                	<a href="detail.html" class="link-p">
		                    	<img src="<?php echo base_url(); ?>images/products/<?php echo $rows['tshirt_image']; ?>" alt=""> 
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>"><?php echo $rows["tshirt_name"]; ?></a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ <?php echo $rows["tshirt_price"] ?></a>
			                        	<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <?php } ?>

				</div>
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Featured -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">FEATURED PRODUCTS</span>
            	</div>
	            
	            <?php foreach ($products_data as $rows ) { ?>
	            	
	           
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>" class="link-p">
	                    	<img src="<?php echo base_url(); ?>images/products/<?php echo $rows['tshirt_image']; ?>" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>"><?php echo $rows["tshirt_name"]; ?></a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ <?php echo $rows["tshirt_price"] ?></a>
	                        		<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>

	            <?php  } ?>

        	</div>
        	<!-- End Featured -->

        	<div class="clearfix visible-sm"></div>

			<!-- Adidas Category -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="col-lg-12 col-sm-12">
            		<span class="title">ADIDAS</span>
            	</div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.html" class="link-p">
	                    	<img src="images/product-10.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.html">Adidas Men Blue &amp; Red Striped Polo T-shirt </a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ 22.22</a>
		                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.html" class="link-p">
	                    	<img src="images/product-11.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.html">Adidas Men Flame Black T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 15.47</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="detail.html" class="link-p">
	                    	<img src="images/product-12.jpg" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="detail.html">Adidas Men Red Printed T-shirt</a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ 20.63</a>
	                        		<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
			</div>
			<!-- End Adidas Category -->

        </div>