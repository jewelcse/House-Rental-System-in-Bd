<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>



<!--calling function --->
<?php include"functions.php" ; ?>


<div class="container">
	<div class="row">
		<div class="title_head">
			<h2>All Categories : </h2>
		</div>
		<table class="table table-bordered">
			
			<thead>
				<tr>
					<th>Category Id</th>
					<th>Category Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				   
<?php 


$query = "SELECT * FROM category";

$select_category_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_category_query)) {
	
	 $category_id = $row['cat_id'];
	 $category_name = $row['cat_name'];
	
?>

				<tr>
					<td><?php echo $category_id ?></td>
					<td><?php echo $category_name ?></td>

					<td><a href="edit_category.php?edit_cat=<?php echo $category_id ; ?>">Edit</a></td>
					<td><a href="all_category.php?delete_cat=<?php echo $category_id ; ?>">Delete</a></td>
					
				</tr>

<?php }  ?>



			</tbody>
		</table>
	</div>
</div>

<?php  delete_category(); ?>

						

				    	
				    	
				    					    	
				        
					
				    	

