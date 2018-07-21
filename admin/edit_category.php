<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/admin_navigation.php" ; ?>

<!--connection to functions file --->
<?php include"functions.php" ; ?>



<?php 

if (isset($_GET['edit_cat'])) {
	
$the_edit_category_id = $_GET['edit_cat'];

}

$query = "SELECT * FROM category where cat_id = {$the_edit_category_id}";

$the_edit_category_query = mysqli_query($connection,$query);

if (!$the_edit_category_query) {
	
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	while ($row = mysqli_fetch_array($the_edit_category_query) ){
		
			$category_name  = $row['cat_name'];
			

?>





<?php 

if (isset($_POST['update_category'])) {
	
	$update_category_name = $_POST['cat_name'];
		

		 

   $query = "UPDATE category SET cat_name = '$update_category_name' WHERE cat_id = $the_edit_category_id" ;




		 $update_category_query = mysqli_query($connection,$query);

		 if (!$update_category_query) {
		 	die("QUERY FAILED".mysqli_error($connection));
		 }
		 else{
		 	header("location:index.php?source=all_categories");
		 }



}

?>

<div class="container">
	<div class="row">
		<div class="col-md-offset 2 col-md-8 col-md-offset-2">
			<div class="head_title">
				<h2>Edit category</h2>
			</div>
				<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="cat_name">Category Name  :</label>
					<input type="text" class="form-control" name="cat_name" value="<?php echo $category_name;?>" >
				</div>



				<button type="submit" class="btn btn-primary" name="update_category">Update</button>
				
			</form>
		</div><!--/.col-md-offset 2 col-md-8 col-md-offset-2-->
	</div><!--/.row-->
</div><!--/.container-->

<?php } } ?>





