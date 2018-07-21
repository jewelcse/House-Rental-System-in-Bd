<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--header section --->
<?php include"header_section.php" ; ?>

<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>


<div class="container">
				<div class="main">

<?php 


if (isset($_GET['house_id'])) {
	
	$the_house_id = $_GET['house_id'] ;

}

$query = "SELECT * FROM houses WHERE house_id = {$the_house_id}";

$select_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_query)) {
	
	 $house_id = $row['house_id'];
	 $user_id = $row['user_id'];
	 $house_name = $row['house_name'];
	 $house_image = $row['house_image'];
	 $added_date = $row['added_date'];
	 $house_rent = $row['house_rent'];
	 $description = $row['description'];
	 $address = $row['address'];
	 $booking_status  = $row['booking_status'];
?>

<?php 
if ($user_id==0) {
	$added_by  = 'admin ';
}
else{
	$query  = "SELECT * FROM users WHERE user_id  = $user_id ";

	$user_name_select_query  = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($user_name_select_query)) {
		
		$added_by = $row['user_firstname'] ." ". $row['user_lastname'];

	}
}




?>
		<?php 

if ($booking_status == 0) {

	$status = 'Available';
	
}
else{

	$status = 'Booked';

}



?>				

		
			
				<h3><?php echo $house_name." "."(" ; ?><small><?php echo $status ; ?></small>)</h3><hr>
				<div class="book-img">
					<img src="images/<?php echo $house_image ?>" alt="image"/>
				</div>
				<div class="book-text">
					<span class="house-added"><?php echo $added_date; ?></span><br />
					<span class="house-added">Added by:<?php echo $added_by ?></span><br>
					<span class="house-location"><?php echo $address; ?></span><br />
					<span class="house-price">BDT <?php echo $house_rent ; ?></span><br />
					<p>
						<?php echo $description; ?>
						
					</p><br>
					
				</div>
 
			<?php } ?>



			<a href="booking_policy.php?booking_policy=<?php echo $house_id; ?>">
			<button type="button" name="book-house" class="btn btn-primary">Want to book</button></a>

				</div>
			</div>
			</div>
	
		<footer class="footer"> 
			<p>&copy; <a href="#">House Rental System</a>.All rights reserved 2017.</p>
		</footer>
	