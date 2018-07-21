<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<!--calling function --->
<?php include"functions.php" ; ?>


<div class="container">
	<div class="row">
		<div class="title_head">
			<h2>Booking Details : </h2>
		</div>
		<table class="table table-bordered">
			
			<thead>
				<tr>
					<th>Booking Id</th>
					<th>House Name</th>
					<th>House Rent</th>
					<th>User Firstname</th>
					<th>User Lastname</th>
					<th>Email</th>
					<!--<th>location-map</th>-->
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				   
<?php 


$query = "SELECT * FROM bookingDetails order by booking_id  desc";

$select_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_query)) {
	
	 $booking_id = $row['booking_id'];
	 $house_name = $row['house_name'];
	 $house_rent = $row['house_rent'];
	 $user_firstname = $row['user_firstname'];
	 $user_lastname = $row['user_lastname'];
	 $user_email = $row['user_email'];
	 //$location_map = $row['location_map'];
?>

				<tr>
					<td><?php echo $booking_id ?></td>
					<td><?php echo $house_name ?></td>
					<td><?php echo $house_rent ?></td>
					<td><?php echo $user_firstname ?></td>
					<td><?php echo $user_lastname ?></td>
					<td><?php echo $user_email ?></td>
					<!--<td><?php //echo $location_map ?></td>-->
					<td><a href="">Booked</a></td>
					
				</tr>

<?php }  ?>



			</tbody>
		</table>
	</div>
</div>



						

				    	
				    	
				    					    	
				        
					
				    	

