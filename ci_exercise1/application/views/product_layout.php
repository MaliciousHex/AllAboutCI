<h1> Products</h1>
 
    <?php 
      foreach($products_data as $rows){
     ?>
         <div class="product_box">
               <!--<a href="index.php?detail&shoes_id="></a>-->
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
             </a>

            <h3><?php echo $rows["shoes_name"]; ?></h3>

            <p class="product_price">Rp. <?php echo $rows["price"]; ?> </p>

            <p></p>

            <a href="javascript:" shoes-id="" class="addtocart"></a>

            <a href="<?php echo base_url(); ?>Product/productDetail/<?php echo $rows["shoes_id"]; ?>" class="detail"></a>

                

            </div> 
    <?php 

      }

    ?>

<div class="cleaner"></div>
            
<div class="pagination"> 
  <?php echo $this->pagination->create_links(); ?>
</div>

          <!-- <input type="hidden" id="qty" name="qty" value="1"> -->