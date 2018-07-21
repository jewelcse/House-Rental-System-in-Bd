<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/admin_navigation.php" ; ?>

<!--connection to functions file --->
<?php include"functions.php" ; ?>








<?php 

if (isset($_GET['edit_house_id'])) {
	
$the_edit_house_id = $_GET['edit_house_id'];

}

$query = "SELECT * FROM houses where house_id = {$the_edit_house_id}";

$the_edit_house_query = mysqli_query($connection,$query);

if (!$the_edit_house_query) {
	
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	while ($row = mysqli_fetch_array($the_edit_house_query) ){
		
			$category_id  = $row['category'];
			$house_name  = $row['house_name'];
			$house_image  = $row['house_image'];
			$house_rent  = $row['house_rent'];
			$description  = $row['description'];
			$address  = $row['address'];
			//$location  = $row['location_map'];

?>





<div class="container">
	<div class="row">
		<div class="col-md-offset 2 col-md-8 col-md-offset-2">
			<div class="head_title">
				<h2>Edit house</h2>
			</div>
				<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="house_name">House Name  :</label>
					<input type="text" class="form-control" name="house_name" value="<?php echo $house_name;?>" >
				</div>
				<div class="form-group">
					<label for="house_image">House Image  :</label>
					<img width="100px" src="../images/<?php echo $house_image ; ?>" alt="image">
					<input type="file" class="form-control" name="house_image">
				</div>
				<div class="form-group">
					<label for="house_rent">House Rent  :</label>
					<input type="text" class="form-control" name="house_rent" value="<?php echo $house_rent;?>" >
				</div>

				<div class="form-group">
					<label for="house_category">Category:</label>
					<select name="category">

<?php 
$query = "SELECT * FROM category ";
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
					<textarea  rows="10" name="description" class="form-control">
						<?php echo $description;?>
					</textarea>
				</div>
				<div class="form-group">
					<label for="address">Address  :</label>
					<input type="text"  name="address" class="form-control" value="<?php echo $address;?>" >
				</div>
				<!--<div class="form-group">
					<label for="location_map">Location Map-Link :</label>
					<textarea  rows="5" name="location_map"  class="form-control">
						<?php //echo $location; ?>
					</textarea>
				</div>-->

				<button type="submit" class="btn btn-primary" name="update_house">Update</button>
				
			</form>
		</div><!--/.col-md-offset 2 col-md-8 col-md-offset-2-->
	</div><!--/.row-->
</div><!--/.container-->

<?php } } ?>

<?php 

if (isset($_POST['update_house'])) {
	
		 $house_name = $_POST['house_name'];
		 $image = $_FILES['house_image']['name'];
	     $image_temp = $_FILES['house_image']['tmp_name'];
	     $date = date('d-m-y');
	     $house_rent = $_POST['house_rent'];
	     $category = $_POST['category'];
		 $description = $_POST['description'];
		 $address = $_POST['address'];
		// $location_map = $_POST['location_map'];



		 $house_name = mysqli_real_escape_string($connection,$house_name);
		 $house_rent = mysqli_real_escape_string($connection,$house_rent);
		 $description = mysqli_real_escape_string($connection,$description);
		 $address = mysqli_real_escape_string($connection,$address);
		 $category = mysqli_real_escape_string($connection,$category);







		 move_uploaded_file($image_temp, "../images/$image");

		 if (empty($image)) {

		 	$query = "SELECT * FROM houses WHERE house_id = {$the_edit_house_id}";

		 	$select_image_query = mysqli_query($connection,$query);

		 	while($row = mysqli_fetch_array($select_image_query)){
		 			$image = $row['house_image'];

		 	}	
		 }

		 

$query = "UPDATE houses SET ";
    $query .= "house_name = '{$house_name}', ";
    $query .= "category = '{$category}', ";
    $query .= "house_image = '{$image}', ";
    $query .= "added_date = now(), ";
    $query .= "house_rent = '{$house_rent}', ";
    $query .= "description = '{$description}', ";
    $query .= "address = '{$address}' ";
   // $query .= "location_map = '{$location_map}' ";
    $query .= "WHERE house_id = {$the_edit_house_id} ";




		 $update_house_query = mysqli_query($connection,$query);

		 if (!$update_house_query) {
		 	die("QUERY FAILED".mysqli_error($connection));
		 }
		 else{
		 	header("location:index.php?source=all_houses");
		 }


}


?>





