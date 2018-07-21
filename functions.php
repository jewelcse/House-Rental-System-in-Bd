<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<?php

function add_house(){

	global $connection;



if (isset($_POST['add_house'])) {
		
		
		 $house_name = $_POST['house_name'];

		 $image = $_FILES['house_image']['name'];
	     $image_temp = $_FILES['house_image']['tmp_name'];

	     

	     $house_rent = $_POST['house_rent'];
		 $date = date('d-m-y');
		 $description = $_POST['description'];
		 $address = $_POST['address'];
		 //$location_map = $_POST['location_map'];



		 $house_name = mysqli_real_escape_string($connection,$house_name);
		 $house_rent = mysqli_real_escape_string($connection,$house_rent);
		 $description = mysqli_real_escape_string($connection,$description);
		 $address = mysqli_real_escape_string($connection,$address);

		 

		 move_uploaded_file($image_temp, "images/$image");

		 $uid = $_SESSION['user_id'];

		 $query = "INSERT INTO houses(house_id,user_id,house_name,house_image,house_rent,added_date,description,address) VALUES('','$uid','$house_name','$image','$house_rent',now(),'$description','$address')";

		 $house_insert_query  = mysqli_query($connection,$query);


		 if (!$house_insert_query) {
		 	
		 	die("QUERY FAIELD".mysqli_error($connection));
		 }

		 else{

		 	echo "<div class='alert alert-success'>Successfully add house!!!</div>";

		 }

	}

}


function delete_house(){

	global $connection;


if (isset($_GET['delete_house_id'])) {
	
  $the_delete_house_id = $_GET['delete_house_id'];



$query  = "DELETE FROM houses WHERE house_id = {$the_delete_house_id}";


$delete_query = mysqli_query($connection,$query);

if (!$delete_query ) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	header("location:all_houses.php");;
}

}


}


function delete_user_add(){

	$uid=$_SESSION['user_id'];
	global $connection;


if (isset($_GET['delete_add'])) {
	
  $the_delete_house_id = $_GET['delete_add'];



$query  = "DELETE FROM houses WHERE house_id = {$the_delete_house_id}";


$delete_query = mysqli_query($connection,$query);

if (!$delete_query ) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	
	header("location:your_adds.php?your_adds=$uid");
}

}


}

function cancel_booking(){

	$uid=$_SESSION['user_id'];
	global $connection;


if (isset($_GET['booking_cancel']) && isset($_GET['house_id']) ) {
	
  $the_booking_cancel_id = $_GET['booking_cancel'];
  $the_house_id = $_GET['house_id'];



$query  = "DELETE FROM bookingDetails WHERE booking_id = {$the_booking_cancel_id}";


$delete_query = mysqli_query($connection,$query);

$query  ="UPDATE houses SET booking_status = false WHERE house_id = $the_house_id";

$status_change_query = mysqli_query($connection,$query);


if (!($delete_query)&&($status_change_query)) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	
	header("location:your_booking.php?your_bookings=$uid");
}

}


}


































?>

