<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>


<div class="container">
				<div class="main">

<?php 


if (isset($_GET['booking_policy'])) {
	
	$the_house_id = $_GET['booking_policy'] ;

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
				<div class="book-text"><h3>Some polices : </h3>
					<p>
<ul>
	<li>This is a ruleThis is a ruleThis is a rule</li>
	<li>This is a ruleThis is a ruleThis is a ruleThis is a rule</li>
	<li>This is a ruleThis is a ruleThis is a rule</li>
	<li>This is a ruleThis is a ruleThis is a ruleThis is a rule</li>
	<li>This is a ruleThis is a rule</li>
	<li>This is a ruleThis is a ruleThis is a rule</li>

</ul>



					</p>
					
				</div>
 
			<?php } ?>



			<a href="book.php?book-house=<?php echo $house_id; ?>">
			<button type="button" name="book-house" class="btn btn-primary">Book</button></a>

				</div>
			</div>
			</div>
	
		<footer class="footer"> 
			<p>&copy; <a href="#">House Rental System</a>.All rights reserved 2017.</p>
		</footer>
	