            	    <h2>Add Products</h2>
				   <p>Add Data Products on StationShop</p>
                    <form action="<?php echo base_url();  ?>AdminMain/addProductSubmit" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="product_id" value="" />
                    
					<div class="element" >
						<label for="title">Product Name <span class="red">(required)</span></label>
						<input id="product_name" name="product_name" class="text" 
                        value="" />
					</div>
                    
                    <div class="element" >
						<label for="title">Brand <span class="red">(required)</span></label>
						<input id="brand" name="brand" class="text" value="" />
					</div>
                    
                    <div class="element" >
						<label for="title">Price <span class="red">(required)</span></label>
						<input id="price" name="price" class="text" value="" />
					</div>
                    
                    <div class="element" >
						<label for="title">stock <span class="red">(required)</span></label>
						<input id="stock" name="stock" class="text" value="" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="product_description" rows="10" ></textarea>
 
                    </div>
                    
                    <div class="element"> 
                        <label for="gambar">Attachments</label>
						<input type="file" name="gambar" id="gambar" />
					</div>
                    
                    <div class="element">
                    	
                    </div>
                    
                    
					<div class="entry">
					  <button type="submit" class="hide">Preview</button> <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>