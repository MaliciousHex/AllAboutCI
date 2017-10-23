
				<h2>Products</h2><?php //judul table ?>
				<p>Data-data Products on StationShop</p>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">No.</th>
                            <th scope="col">Image</th>
                         
							<th scope="col">Products</th>
							<th scope="col">Price</th>
							
							
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
                     <?php $no=1; ?> 
                     <?php foreach($products_data as $rows) { ?>
						<tr>
							<td class="align-center"><?php echo $no; ?></td>
                            <td><img src="<?php echo base_url(); ?>images/product/<?php echo $rows["gambar"]; ?>" width="70" height="70" /></td>
							
							<td><?php echo $rows["product_name"]; ?></td>
							<td><?php echo $rows["price"]; ?></td>
							
							<td>
								<a href="<?php echo base_url(); ?>AdminMain/editProduct/<?php echo $rows["product_id"]; ?>" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title=" View Comment"></a>
								<a href="<?php echo base_url(); ?>AdminMain/deleteProduct/<?php echo $rows["product_id"]; ?>" class="table-icon delete" title="Delete" onclick="javascript:return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "></a>
							</td>
						</tr>
                        <?php $no++; ?>
				   <?php } ?>
					</tbody>
				</table>
				<div class="entry">
					<!--<div class="pagination">
                   
						
						
						<a href="?page=#"><?php echo 1 ?></a>
                        <a href="?page=#"><?php echo 2 ?></a>
                        <a href="?page=#"><?php echo 3 ?></a>
                        <a href="?page=#"><?php echo 4 ?></a>
						
                   
					</div>-->
                    
					<div class="sep hide"></div>		
				  <a class="button add " href="<?php echo base_url(); ?>AdminMain/addProduct">Add new product</a> <a class="button hide" href="">Categories</a> 
				
            
            
	
