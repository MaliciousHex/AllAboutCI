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
		                	<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>" class="link-p">
		                    	<img src="<?php echo base_url(); ?>images/products/<?php echo $rows['tshirt_image']; ?>" alt=""> 
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>"><?php echo $rows["tshirt_name"]; ?></a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ <?php echo $rows["tshirt_price"] ?></a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
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

			<!-- Catalogue -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">PRODUCTS CATALOGUE</span>
            	</div>
	            <?php foreach ($products_data as $rows){
	            	?>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="<?php echo base_url(); ?>images/products/<?php echo $rows['tshirt_image']; ?>" class="link-p">
	                    	<img src="<?php echo base_url(); ?>images/products/<?php echo $rows['tshirt_image']; ?>" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>"><?php echo $rows["tshirt_name"]; ?></a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
	                        		<a href="#" class="btn btn-default">$ <?php echo $rows["tshirt_price"]; ?></a>
	                        		<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["tshirt_id"]; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <?php } ?>


		
        	<!-- End Catalogue -->


        </div>