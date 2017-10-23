<?php

	/*
		 petunjuk : 
		 
		 pisahkan bagian content , pada page ini ke dalam file baru bernama, product_admin.php
		 lalu product_admin.php disimpan kedalam folder view 
		 
		
	
	*/
	
	session_start();
	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>PROGRESS - Bussiness Company</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
<style>
	
	.hide{ display:none !important;  /*visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong><?php if(isset($_SESSION['name']) != ""){ $name = $_SESSION['name']; echo $name; } else if(!isset($_SESSION['name'])) { echo ""; }; ?></strong> [ <a href="<?php //rocess/logout_admin.php ?>">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
                <?php
					
					$hari = date("N");
					
					include "process/date_converter.php";
				
				?>
                
					<p><strong><?php echo "$hari_string ,".date(" d-m-Y "); ?></strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> <?php #ini adalah menu ?>
			<ul>
				<li class="upp"><a href="#">News</a>
					<!-- <ul class="hide">
						<li>&#8250; <a href="">News </a></li>
						<li>&#8250; <a href="">Comment News</a></li>
						<li>&#8250; <a href="">Member </a></li>
						<li>&#8250; <a href="">Product</a></li>
                        <li>&#8250; <a href="">Contact </a></li>
					</ul>-->
				</li>
				<li class="upp "><a href="#">Member</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all pages</a></li>
						<li>&#8250; <a href="">Add new page</a></li>
						<li>&#8250; <a href="">Add new gallery</a></li>
						<li>&#8250; <a href="">Categories</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">User</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">Product</a>
					<ul class="hide">
						<li>&#8250; <a href="">Site configuration</a></li>
						<li>&#8250; <a href="">Contact Form</a></li>
					</ul>
				</li>
                <li class="upp "><a href="#">Contact</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="member_admin.php">Member</a></li>
					<li class="b2"><a class="icon config" href="user_admin.php">User </a></li>
					
					<li class="b2"><a class="icon product" href="product_admin.php">Product</a></li>
                    
                    <li class="b2"><a class="icon contact" href="contact_admin.php">Contact</a></li>
				</ul>
			</div>
			
			<div class="box hide">
				<div class="h_title">&#8250; Manage content</div>
				<ul>
					<li class="b1"><a class="icon page" href="">Show all pages</a></li>
					<li class="b2"><a class="icon add_page" href="">Add new page</a></li>
					<li class="b1"><a class="icon photo" href="">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="">Categories</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="">Show all users</a></li>
					<li class="b2"><a class="icon add_user" href="">Add new user</a></li>
					<li class="b1"><a class="icon block_users" href="">Lock users</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Settings</div>
				<ul>
					<li class="b1"><a class="icon config" href="">Site configuration</a></li>
					<li class="b2"><a class="icon contact" href="">Contact Form</a></li>
				</ul>
			</div>
		</div>
        
        <?php 
			 // petunjuk 
			 
			 // ini adalah content dari product_admin.php
			 // pisahkan bagian ini ,  lalu gantikan dengan include file yang ada di folder controller 
			 // yang bertugas mengatur file di folder view
		
		?>
        
		<div id="main">
        
        
		  <div class="clear"></div>
          
			
			
			<div class="full_w">
				<div class="h_title">Manage pages - table</div>
				<h2>News</h2><?php //judul table ?>
				<p>Ini adalah Content Berita, untuk menambah berita baru, silahkan menginput berita pada Form dibawah</p>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">Id News</th>
                            <th scope="col">Image</th>
                         
							<th scope="col">Title</th>
							<th scope="col">Datetime</th>
							<th scope="col">Ip Address</th>
							
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
                    <?php
					
					//include "../config/config.php";
						
					?>
						<tr>
							<td class="align-center"><?php //ubah ?></td>
                            <td><img src="image_upload/<?php echo $f['image']; ?>" width="70" height="70" /></td>
							<td><?php //ubah ?></td>
							<td><?php //ubah  ?></td>
							<td><?php //ubah ?></td>
							
							<td>
								<a href="news_admin.php?id=<?php //ubah ?>" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title=" View Comment"></a>
								<a href="process/news_delete_process.php?id=<?php //ubah ?>" class="table-icon delete" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "></a>
							</td>
						</tr>
				
					</tbody>
				</table>
				<div class="entry">
					<div class="pagination">
                   
						
						
						<a href="?page=#"><?php echo 1 ?></a>
                        <a href="?page=#"><?php echo 2 ?></a>
                        <a href="?page=#"><?php echo 3 ?></a>
                        <a href="?page=#"><?php echo 4 ?></a>
						
                   
					</div>
                    
					<div class="sep hide"></div>		
				  <a class="button add hide" href="">Add new page</a> <a class="button hide" href="">Categories</a> 
				</div>
			</div>
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Add News </div>
              <div>
              	
				
                	
                    <?php
                  		
						/*
							petunjuk : 
							
							atur pada form ini , kalau saat klik edit maka form untuk edit.
							kalau untuk insert , maka form untuk insert data baru 
						
						*/
						
                	?>
                    <form action="<?php //echo $form_action; ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id_news" value="<?php //echo $id; ?>" />
                    
					<div class="element" >
						<label for="title"> Title <span class="red">(required)</span></label>
						<input id="title" name="title" class="text <?php //err ?>" 
                        value="<?php //echo $title; ?>" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="description" rows="10" ><?php //echo $description ?></textarea>
 
                    </div>
                    
                    <div class="element"> 
                        <img src="<?php //echo "$image";?>" width="200" height="200"/>
					
                        <input type="hidden" name="image_old" value="<?php //echo $f1['image']; ?>" />
                        <label for="gambar">Attachments</label>
						<input type="file" name="gambar" />
					</div>
                    
                    <div class="element">
                    	<?php 
							
						?>
                    </div>
                    
                    
                    <!-- 
					<div class="element hide">
						<label for="category">Category <span class="red">(required)</span></label>
						<select name="category" <?php //class="err" ?>>
							<option value="0">-- select category</option>
							<option value="1">Category 1</option>
							<option value="2">Category 4</option>
							<option value="3">Category 3</option>
						</select>
					</div>
					<div class="element hide">
						<label for="comments">Comments</label>
						<input type="radio" name="comments" value="on" checked="checked" /> Enabled <input type="radio" name="comments" value="off" /> Disabled
					</div>
					
					<div class="element hide">
						<label for="content">Page content <span>(required)</span></label>
						<textarea name="content" class="textarea" rows="10"></textarea>
					</div> -->
					<div class="entry">
					  <button type="submit" class="hide">Preview</button> <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
         
            
	  </div>
	 <div class="clear"></div>
	</div> <?php ?> 
    
    	<?php
			
			// akhir dari product_admin.php
		
		?>

	<div id="footer">
		<div class="left">
			<p>Design: <a href="http://kilab.pl">Paweł Balicki</a> | Admin Panel: <a href="">YourSite.com</a></p>
		</div>
		<div class="right">
			<p><a href="">Example link 1</a> | <a href="">Example link 2</a></p>
		</div>
	</div>
</div>

</body>
</html>
