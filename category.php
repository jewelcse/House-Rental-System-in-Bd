<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--header section --->
<?php include"header_section.php" ; ?>



<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>






		<div class="main">
			<div class="wrapper">
				<?php

					if (isset($_GET['cat_id'])) {
		
					$category_id = $_GET['cat_id'];

					}

					$query = "SELECT * FROM houses WHERE category =  $category_id ";

					$select_query = mysqli_query($connection,$query);

					$house_count = mysqli_num_rows($select_query);
				?>
				<small>Available houses</small><span class="badge badge-secondary"><?php echo $house_count ; ?> </span>
				<hr>
					<div class="clearfix">
				

				   
<?php 

$query = "SELECT * FROM houses WHERE category =  $category_id ";

$select_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_query)) {
	
	 $house_id = $row['house_id'];
	 $user_id = $row['user_id'];
	 $house_name = $row['house_name'];
	 $house_image = $row['house_image'];
	 $added_date = $row['added_date'];
	 $description = $row['description'];
	 $address = $row['address'];

	 $booking_status  = $row['booking_status'];
?>

						 <div class="houses">
						<a href="houses.php?house_id=<?php echo $house_id  ?> ">
				    	<img  class="img-responsive" src="images/<?php echo $house_image ?>" alt="image"/></a>
<?php 

if ($booking_status == 0) {

	$status = 'Available';
	
}
else{

	$status = 'Booked';

}



?>
				    	<span class="house-title"><?php echo $house_name ?> </span>(
<small><?php echo $status ?></small>)


				    	<br>

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
						<span class="house-added">Added by:<?php echo $added_by ?></span><br>

				    	<span class="house-added"><?php echo $added_date ?></span><br>
				    	<span class="house-location"><?php echo $address ?></span><br>



				    	
				    	<a href="houses.php?house_id=<?php echo $house_id  ?> ">
				    	<button type="button" class="btn btn-primary">Details</button></a>

				    					    	
				        </div><!--/.houses --->
					
				    	<?php }  ?>

					</div> <!--/.clearfix --->
  
				</div>  <!--/.wrapper --->

			</div> <!--/.main --->

		<!--footer section --->
<?php include"includes/footer.php" ; ?>