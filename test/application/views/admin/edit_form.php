<div>
<?php 
	if(isset($data_product)){

	
 ?>
              	    <h2>Edit Products</h2>
				   <p>Edit Data Products on StationShop</p>
                    <form action="<?php echo base_url(); ?>AdminMain/editProductSubmit" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="product_id" value="<?php echo $data_product->product_id; ?>" />
                    
					<div class="element" >
						<label for="title">Product Name <span class="red">(required)</span></label>
						<input id="product_name" name="product_name" class="text" 
                        value="<?php echo $data_product->product_name; ?>" />
					</div>
                    
                    <div class="element" >
						<label for="title">Brand <span class="red">(required)</span></label>
						<input id="brand" name="brand" class="text" value="<?php echo $data_product->brand; ?> " />
					</div>
                    
                    <div class="element" >
						<label for="title">Price <span class="red">(required)</span></label>
						<input id="price" name="price" class="text" value="<?php echo $data_product->price; ?>" />
					</div>
                    
                    <div class="element" >
						<label for="title">stock <span class="red">(required)</span></label>
						<input id="stock" name="stock" class="text" value="<?php echo $data_product->stock; ?>" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="product_description" rows="10" ><?php echo $data_product->product_description; ?></textarea>
 
                    </div>
                    
                    <div class="element"> 
                         <img src="<?php echo base_url(); ?>images/product/<?php echo $data_product->gambar; ?> " width="200" height="200"/>
					
                        <input type="hidden" name="gambar_old" value="<?php echo $data_product->gambar; ?>" />
                        <label for="gambar">Attachments</label>
						<input type="file" name="gambar" id="gambar" />
					</div>
                    
                    <div class="element">
                    	
                    </div>
                    
                    
					<div class="entry">
					  <button type="submit" class="hide">Preview</button> <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
<?php 
	}
?>
		  </div>