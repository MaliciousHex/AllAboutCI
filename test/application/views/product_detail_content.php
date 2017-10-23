<h1>Etiam In Tellus</h1>
<?php 
    if(isset($product_data)){
 ?>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="<?php echo base_url(); ?>images/product/<?php echo $product_data->gambar; ?>"><img src="<?php echo base_url(); ?>images/product/<?php echo $product_data->gambar; ?>" alt="Image 01" /></a>
            </div>
            <div class="content_half float_r">
				<table>
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>$<?php echo $product_data->price; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td height="30">Brand</td>
                        <td><?php echo $product_data->brand; ?></td>
                    </tr>
                    <tr><td height="30">Stock</td><td><?php echo $product_data->stock; ?></td></tr>
                </table>
                <div class="cleaner h20"></div>
			</div>
            <div class="cleaner h30"></div>
            
            <h5>Product Description</h5>
            <p><?php echo $product_data->product_description; ?></p>	
            
            <div class="cleaner h50"></div>

<?php } ?>