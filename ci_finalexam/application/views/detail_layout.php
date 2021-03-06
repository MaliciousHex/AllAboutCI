 <?php 
        if(isset($product_data)){
      ?>
      <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-12 visible-lg visible-md">
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

			<!-- Product Detail -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title"><?php  echo $product_data->tshirt_name; ?></span>
            	</div>
	            <div class="col-lg-12 col-sm-12 hero-feature">
            		<div class="sp-wrap">
						<a href="<?php echo base_url(); ?>images/products/<?php echo $product_data->tshirt_image;?>"><img src="<?php echo base_url(); ?>images/products/<?php echo $product_data->tshirt_image; ?>" alt=""></a>
					</div>
					<h4><?php  echo $product_data->tshirt_name; ?></h4>
					13 items in stock
					<hr/>
					Actually this part of clothes is very unique and original. It is a way of self-expression because nowadays making some logo or phrase has become very popular. Obviously the T-shirts are the part of modern culture and they have a great influence on teens because of their freedom and epatage. We are offering you our unique and original products.
					<hr/>
					<h3>$<?php  echo $product_data->tshirt_price; ?></h3>
					<div class="input-qty-detail">
						<input type="text" class="form-control input-qty text-center" value="1">
						<button class="btn btn-primary pull-left">add to cart</button>
					</div>
					<br/>
					<hr/>
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
					</div>
					<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-4f0c254f1302adf8"></script>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-lg-12 col-sm-12">
            		<span class="title">RELATED PRODUCTS</span>
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
        	<!-- End Product Detail -->


        </div>

        <?php } ?>