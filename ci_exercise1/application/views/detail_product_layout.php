     <?php 
        if(isset($product_data)){
      ?>	

      <h2><?php echo $product_data->shoes_name; ?></h2>

            <div class="content_half float_l">

        

        	 <a title="Product Name"  rel='lightbox[roadtrip]' href='<?php echo base_url(); ?>asset/product_display/<?php echo $product_data->image_name; ?>' >
               <img width="300" height="225" src="<?php echo base_url(); ?>asset/product_display/<?php echo $product_data->image_name; ?>" />
             </a>

            
              <div class="img_box">
                  
                  <?php 
                  foreach ($picture as $rows){

                   ?>
                
                  <a title="Product Name"  rel='lightbox[roadtrip]' href='<?php echo base_url(); ?>asset/product_display/<?php echo $rows["image_name"]; ?>' >
                     <img  rel="lightbox[roadtrip]" class="detail_img" src="<?php echo base_url(); ?>asset/product_display/<?php echo $rows["image_name"]; ?>" alt="image" />
                   </a>
                  <?php 
                  }
                   ?>

                </div>

               

            </div>

            <script type="text/javascript" src="<?php echo base_url();?>js/plus_minus.js"></script>

            <div class="content_half float_r">

                <table>

                    <tr>

                        <td width="160">Price:</td>

                        <td>Rp. <?php echo $product_data->price; ?></td>

                    </tr>

                    <tr>

                        <td>Availability:</td>

                        <td><?php echo $product_data->stock; ?></td>

                    </tr>

                    <tr>

                        <td>Manufacturer:</td>

                        <td><?php echo $product_data->brand_name; ?></td>

                    </tr>

                    <tr>

                    	<td>Quantity</td>

                        <td>

                        <input type="button" value=" - " onclick="minus()" id="plus" >

                       		<input type="text" value="1" style="width: 20px; text-align: right" name="qty" id="qty"/>

                        <input type="button" value=" + " onClick="plus()" id="minus">

                        </td>

                    </tr>

                </table>

                <div class="cleaner">

               
                </div>

                  <div class="desc_box">

                  	  <h5>Product Description</h5>

            <p><?php echo $product_data->description; ?></p>	

                  </div>

              

                <a style="float:right; margin-right:90px;" href="javascript:" class="addtocart" id="aaxx" shoes-id=""></a>



			</div>

            <div class="cleaner h30"></div>

            

          

            

          <div class="cleaner h50"></div>

             

            <h3>You Might Also Like</h3>

            

        	<div class="product_box">

            	<a href="#"><img src="" alt="" /></a>

                <h3>Product name</h3>

                <p class="product_price">Rp. 00,00</p>

                <a href="shoppingcart.php?id=&command=add" class="addtocart"></a>

                <a href="productdetail.php" class="detail"></a>

            </div>

            
            

<?php 
  }
 ?>