<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>
<!--header section --->
<?php include"header_section.php" ; ?>

<!--navigation section --->
<?php include"includes/user_navigation.php" ; ?>

<!--connection to functions file --->
<?php include"functions.php" ; ?>

<?php

if (isset($_GET['your_bookings'])) {
	

	$user_id =  $_GET['your_bookings'];


if ($user_id==true) {
	


$query  = "SELECT * FROM bookingDetails  WHERE  user_email = '{$_SESSION['user_email']}' order by  booking_id desc";
$select_query  = mysqli_query($connection,$query);

$user_booking_count = mysqli_num_rows($select_query);

?>

<h1>Yours Booking Details:<span class="badge badge-secondary"><?php echo $user_booking_count; ?> </span></h1><hr>


<?php 

if ($user_booking_count == 0) {
	
	echo "You have no bookings now";
}



$user_booking_count = 1;

?>
<table  class="table table-bordered table-hover">
<tbody>

		<tr>

			<?php  ?>
<?php 
while ($row  = mysqli_fetch_array($select_query)) {
	
	 $booked_house_id = $row['booking_id'];
	 $house_id =  $row['house_id'];
	 $booked_house_name = $row['house_name'];
	 $booked_house_rent = $row['house_rent'];
	 $booked_house_address = $row['house_address'];




?>

	
	
			<td><?php echo $user_booking_count++ ; ?></td>
			<td><?php echo $booked_house_name ; ?></td>
			<td><?php echo "BDT"." ".$booked_house_rent." "."tk" ; ?></td>
			<td><?php echo $booked_house_address ; ?></td>

<td><a href="your_booking.php?booking_cancel=<?php echo $booked_house_id ; ?>&&house_id=<?php echo $house_id ; ?>">
<button type="button" class="btn btn-danger">Cancel Booking</button></a></td>
		</tr>





<?php 
}

 ?>

	</tbody>
</table>


<?php


}
else{

	include "no_user.php";
}



}





///////query for booking delete/////
cancel_booking();
?>		

