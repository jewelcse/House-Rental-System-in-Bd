
<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>
<style type="text/css" media="screen">


.complete-message-show {
    width: 100%;
    padding-top: 80px;
}


.already-booked-message-show {
    width: 100%;
    padding-top: 80px;
}
	
</style>



<?php 


if (isset($_GET['book-house'])) {
	

	  $booking_house_id =  $_GET['book-house'];
    


}





if ($_SESSION['user_id'] == 0) {



	header("location:login.php");
	
	?>




	<!--<h4>Please login to book houses!!!<a href="login.php"><button class="btn btn-primary"> login</button></a></h4>-->






	<?php
}

else {

    $booking_user_firstname = $_SESSION['user_firstname'] ;
	$booking_user_lastname = $_SESSION['user_lastname'];
	$booking_username = $_SESSION['username'] ;
	$booking_user_email = $_SESSION['user_email'] ;




	$query  = "SELECT * FROM houses WHERE house_id  = {$booking_house_id}";

	$select_house_details_query =  mysqli_query($connection,$query);

	while ($row = mysqli_fetch_array($select_house_details_query)) {
		
		$the_booking_house_id = $row['house_id'];
		$the_booking_house_name = $row['house_name'];
		$the_booking_house_rent = $row['house_rent'];
		$the_booking_house_address = $row['address'];
		$booking_status = $row['booking_status'];
		

	}

	
		$query = "UPDATE  houses SET booking_status = true WHERE house_id = $booking_house_id ";


	    mysqli_query($connection,$query);

		if ($booking_status == true) {
			
			?>
<div class="already-booked-message-show">
	<div class="already-booked-message-img">
		<img src="images/alreadybooked.gif" alt="booking-gif">
</div>
</div>
			<?php
		}
		else{


		$query = "INSERT INTO  bookingDetails(booking_id,house_id,house_name,house_rent,house_address,user_firstname,user_lastname,user_email) ";
		$query .="VALUES('','{$the_booking_house_id}','{$the_booking_house_name}','{$the_booking_house_rent}','{$the_booking_house_address}','{$booking_user_firstname}','{$booking_user_lastname}','{$booking_user_email}') ";

		$booking_details_insert_query  = mysqli_query($connection,$query);



		if (!($booking_details_insert_query)) {
		
			die("QUERY FAILED".mysqli_error($connection));
		}

		else{

			?>
<div class="complete-message-show">
	<div class="complete-message-img">
		<img src="images/booking.gif" alt="booking-gif">
</div>
</div>
			<?php
		}

		}



	
}

   
































?>