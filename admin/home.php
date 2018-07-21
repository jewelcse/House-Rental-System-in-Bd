<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/admin_navigation.php" ; ?>




<?php 
///////// count all houses query////////////////

$query = "SELECT * FROM houses";

$select_query = mysqli_query($connection,$query);

 $count_all_house = mysqli_num_rows($select_query);

 ///////// count houses all  category////////////////

$query = "SELECT * FROM category";

$select_category_query = mysqli_query($connection,$query);

 $count_all_category = mysqli_num_rows($select_category_query);

  ///////// count all users ////////////////


$query = "SELECT * FROM users";

$select_all_users_query = mysqli_query($connection,$query);

 $count_all_users = mysqli_num_rows($select_all_users_query);

  ///////// count all Bookings ////////////////


$query = "SELECT * FROM bookingDetails";

$select_all_bookingDetails_query = mysqli_query($connection,$query);

 $count_all_booking = mysqli_num_rows($select_all_bookingDetails_query);


?>

<div class="box">
	<div class="title">
		<h3>All Houses : </h3>
	</div>
	<div class="all-count">
	<span class="badge badge-secondary"><?php echo $count_all_house ; ?> </span>
</div>
	</div>
	<div class="box">
		<div class="title">
		<h3>All Category : </h3>
	</div>
	<div class="all-count">
	<span class="badge badge-secondary"><?php echo $count_all_category ; ?> </span>
	</div>
</div>
	<div class="box">
		<div class="title">
		<h3>All Users : </h3>
	</div>
	<div class="all-count">
	<span class="badge badge-secondary"><?php echo $count_all_users ; ?> </span>
	</div>
</div>
<div class="box">
		<div class="title">
		<h3>All Bookings : </h3>
	</div>
	<div class="all-count">
	<span class="badge badge-secondary"><?php echo $count_all_booking ; ?> </span>
	</div>
</div>
