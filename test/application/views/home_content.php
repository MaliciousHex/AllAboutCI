<h1>New Products</h1>
          <?php  
          foreach($products_data as $rows){
          ?>      	
            <div class="product_box no_margin_right">
            	<a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["product_id"]; ?>"><img src="<?php echo base_url(); ?>images/product/<?php echo $rows["gambar"]; ?>" alt="Image 09" /></a>
                <h3><?php echo $rows["product_name"]; ?></h3>
                <p class="product_price">$ <?php echo $rows["price"]; ?></p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="<?php echo base_url(); ?>Products/productDetail/<?php echo $rows["product_id"]; ?>" class="detail">Detail</a>
            </div> 

            <?php 
            }
             ?>