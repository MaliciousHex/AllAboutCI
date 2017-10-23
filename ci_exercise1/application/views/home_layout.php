 <div id="sliderFrame">

     <div id="slider">

     <img src="images/slider/CAPA.jpg" />

     <img src="images/slider/puma-ronda1.jpg" />

     <img src="images/slider/skora6.jpg" />

     </div>

 </div>



 <h1>New Products</h1>
  
   <?php 
      foreach($products_data as $rows){
     ?>
  
          <div class="product_box">

	            <h3></h3>
                <a href="<?php echo base_url(); ?>Product/productDetail/<?php echo $rows["shoes_id"]; ?>">
               
                 <?php 
                  $gambar = "asset/product_display/" . $rows["image_name"];
                  if(file_exists($gambar)){
               ?>
                  <img src="<?php echo base_url();?>asset/product_display/<?php echo $rows["image_name"]; ?>" alt="" width="200" height="150" /> 
              <?php 
                  }else{
               ?>
               <img src="<?php echo base_url() ;?>images/no_product_image.jpg" width="200" height="150">
             <?php } ?>

             
               <p class="product_price">Rp. <?php echo $rows["price"]; ?> </p>

                <p></p>
  

                <a href="javascript:" shoes-id="" class="addtocart"></a>

                <a href="<?php echo base_url(); ?>Product/productDetail/<?php echo $rows["shoes_id"]; ?>" class="detail"></a>

            </div>
   
   
   <input type="hidden" id="qty" name="qty" value="1">

   <?php 
    }
    ?>