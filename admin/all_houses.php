<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<!--calling function --->
<?php include"functions.php" ; ?>


<div class="container">
	<div class="row">
		<div class="title_head">
			<h2>All houses : </h2>
		</div>
		<table class="table table-bordered">
			<caption>table title and/or explanatory text</caption>
			<thead>
				<tr>
					<th>House Id</th>
					<th>House Name</th>
					<th>Image</th>
					<th>House rent</th>
					<th>Category</th>
					<th>description</th>
					<th>address</th>
					<th>Booking-Status</th>
					<th>Ad-owner</th>
					<!--<th>location-map</th>-->
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				   
<?php 


$query = "SELECT * FROM houses ORDER BY house_id desc ";

$select_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_query)) {
	
	 $house_id = $row['house_id'];
	 $ad_owner_id = $row['user_id'];
	 $category_id = $row['category'];
	 $house_name = $row['house_name'];
	 $house_image = $row['house_image'];
	 $house_rent = $row['house_rent'];
	 $description = $row['description'];
	 $address = $row['address'];
	 $status = $row['booking_status'];
	 //$location_map = $row['location_map'];
?>

<?php
if($status ==true){

	$status = 'booked';
}
else{
	$status = 'available';
}

if ($ad_owner_id == 0) {
	$ad_owner = 'Admin';
}
else{
	$query = "SELECT * FROM users WHERE user_id = {$ad_owner_id}";
	$select_ad_owner  = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($select_ad_owner)) {
		$ad_owner = $row['user_firstname'].' '.$row['user_lastname'];
	}
}


?>
				<tr>
					<td><?php echo $house_id ?></td>
					<td><?php echo $house_name ?></td>
					<td><img width='80px' height='40px' src="../images/<?php echo $house_image ?>" alt="image"/> </td>
					<td><?php echo $house_rent ?></td>
<?php 

///select category name for houses


$query = "SELECT * FROM category WHERE cat_id  = {$category_id} ";

$selce_category_query = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($selce_category_query)) {
	
	$category_name = $row['cat_name'];
}








?>
					<td><?php echo $category_name; ?></td>
					<td><?php echo $description ?></td>
					<td><?php echo $address ?></td>
					<td><?php echo $status ?></td>
					<td><?php echo $ad_owner ?></td>
					<!--<td><?php //echo $location_map ?></td>-->
					<td><a href="edit_house.php?edit_house_id=<?php echo $house_id ?>">Edit</a></td>
					<td><a href="all_houses.php?delete_house_id=<?php echo $house_id ?>">Delete</a></td>
					
				</tr>

<?php }  ?>



			</tbody>
		</table>
	</div>
</div>

<?php  delete_house(); ?>

						

				    	
				    	
				    					    	
				        
					
				    	

