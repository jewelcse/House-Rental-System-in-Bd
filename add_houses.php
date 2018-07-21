<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>
<!--header section --->
<?php include"header_section.php" ; ?>
<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>

<!--connection to functions file --->
<?php include"functions.php" ; ?>


<div class="container">
	<div class="row">
		<div class="col-md-offset 2 col-md-8 col-md-offset-2">
			<div class="head_title">
				<h2>Make an add</h2>
			</div>
				<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="house_name">House Name  :</label>
					<input type="text" class="form-control" name="house_name" placeholder="house name...">
				</div>
				<div class="form-group">
					<label for="house_image">House Image  :</label>
					<input type="file" class="form-control" name="house_image" placeholder="house image...">
				</div>
				<div class="form-group">
					<label for="house_rent">House rent  :</label>
					<input type="text" class="form-control" name="house_rent" placeholder="house rent...">
				</div>
				<div class="form-group">
					<label for="house_category">Category:</label>
					<select name="category">

<?php 
$query = "SELECT * FROM category";
$categry_select_query = mysqli_query($connection,$query);
while ($row  = mysqli_fetch_assoc($categry_select_query)) {
	$cat_id = $row['cat_id'];
	$cat_name = $row['cat_name'];
?>
					
						<option value="<?php echo $cat_id ; ?>"><?php echo $cat_name ; ?></option>
						
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description  :</label>
					<textarea name="description" rows="10"  class="form-control" placeholder="description...">
						
					</textarea>

				</div>
				<div class="form-group">
					<label for="address">Address  :</label>
					<input type="text" class="form-control" name="address" placeholder="address...">
				</div>
				<!--<div class="form-group">
					<label for="location_map">Location Map-Link :</label>
					<textarea name="location_map" rows="5"  class="form-control" placeholder="location_map_link...">
						
					</textarea>
				</div>-->

				<button type="submit" class="btn btn-primary" name="add_house">Add House</button>
				
				
			</form>
		</div><!--/.col-md-offset 2 col-md-8 col-md-offset-2-->
	</div><!--/.row-->
</div><!--/.container-->


<?php

//////////query for house add////

add_house();

?>