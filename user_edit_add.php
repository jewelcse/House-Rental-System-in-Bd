<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>

<!--connection to functions file --->
<?php include"functions.php" ; ?>


<?php 


if (isset($_GET['edit_add'])) {
	
$the_user_edit_add_id = $_GET['edit_add'];


}


$query  = "SELECT * FROM houses WHERE house_id = $the_user_edit_add_id ";

$select_edit_add_query = mysqli_query($connection,$query);

while ($row = mysqli_fetch_array($select_edit_add_query)) {
	
			$house_name  = $row['house_name'];
			$house_image  = $row['house_image'];
			$house_rent  = $row['house_rent'];
			$description  = $row['description'];
			$address  = $row['address'];
			//$location  = $row['location_map'];

}

?>



<?php 

$uid  = $_SESSION['user_id'];

if (isset($_POST['update_add'])) {
	
		 $house_name = $_POST['house_name'];
		 $image = $_FILES['house_image']['name'];
	     $image_temp = $_FILES['house_image']['tmp_name'];
	     $date = date('d-m-y');
	     $house_rent = $_POST['house_rent'];
		 $description = $_POST['description'];
		 $address = $_POST['address'];
		// $location_map = $_POST['location_map'];

		 move_uploaded_file($image_temp, "images/$image");

		 if (empty($image)) {

		 	$query = "SELECT * FROM houses WHERE house_id = {$the_user_edit_add_id }";

		 	$select_image_query = mysqli_query($connection,$query);

		 	while($row = mysqli_fetch_array($select_image_query)){
		 			$image = $row['house_image'];

		 	}	
		 }

		 

$query = "UPDATE houses SET ";
    $query .= "house_name = '{$house_name}', ";
    $query .= "house_image = '{$image}', ";
    $query .= "added_date = now(), ";
    $query .= "house_rent = '{$house_rent}', ";
    $query .= "description = '{$description}', ";
    $query .= "address = '{$address}' ";
   // $query .= "location_map = '{$location_map}' ";
    $query .= "WHERE house_id = {$the_user_edit_add_id} ";




		 $update_house_query = mysqli_query($connection,$query);

		 if (!$update_house_query) {
		 	die("QUERY FAILED".mysqli_error($connection));
		 }
		 else{
		 	echo "<div class='alert alert-success'>Edited Successfully!!!</div>";


		 	?>
			<a href="users.php?uid=<?php echo $uid ?>">
		 	<button type="button" class="btn btn-primary">Back</button></a>


		 <?php  } } ?>













<div class="container">
	<div class="row">
		<div class="col-md-offset 2 col-md-8 col-md-offset-2">
			<div class="head_title">
				<h2>Edit your add</h2>
			</div>
				<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="house_name">House Name  :</label>
					<input type="text" class="form-control" name="house_name" value="<?php echo $house_name ;?>" placeholder="house name...">
				</div>
				<div class="form-group">
					<label for="house_image">House Image  :</label>
					<img src="images/<?php  echo $house_image ; ?>" width='100px' height='80px' alt="">
					<input type="file" class="form-control" name="house_image"  placeholder="house image...">
				</div>
				<div class="form-group">
					<label for="house_rent">House rent  :</label>
					<input type="text" class="form-control" name="house_rent" value="<?php echo $house_rent ; ?>" placeholder="house rent...">
				</div>
				<div class="form-group">
					<label for="description">Description  :</label>
					<textarea name="description" rows="10"  class="form-control" placeholder="description...">
						<?php echo $description ;?>
					</textarea>
				</div>
				<div class="form-group">
					<label for="address">Address  :</label>
					<input type="text" class="form-control" name="address" value="<?php echo $address ;?>" placeholder="address...">
				</div>
				<!--<div class="form-group">
					<label for="location_map">Location Map-Link :</label>
					<textarea name="location_map" rows="5"  class="form-control"  placeholder="location_map_link...">
						<?php// echo $location ; ?>
					</textarea>
				</div>-->

<script>
		tinymce.init({ selector:'textarea' });
</script>
				<button type="submit" class="btn btn-primary" name="update_add">Update</button>
				
			</form>
		</div><!--/.col-md-offset 2 col-md-8 col-md-offset-2-->
	</div><!--/.row-->
</div><!--/.container-->



