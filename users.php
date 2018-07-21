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

if (isset($_GET['uid'])) {
	

	$user_id =  $_GET['uid'];


if ($user_id==true) {
	

	$query  = "SELECT * FROM users WHERE user_id = {$user_id}" ; 

$select_user_query = mysqli_query($connection,$query);

while ($row = mysqli_fetch_array($select_user_query)) {
	
	$user_firstname = $row['user_firstname'];
	$user_lastname = $row['user_lastname'];
	$username = $row['username'];
	$email = $row['user_email'];

}
?>
<ul>
	<li>First Name:<?php echo $user_firstname; ?></li>
	<li>Last Name:<?php echo $user_lastname ; ?></li>
	<li>Username:<?php echo $username; ?></li>
	<li>Email:<?php echo $email ;?></li>
</ul>



<?php 

	include "ad.php";

}

else{

	include "no_user.php";
}


}





///////query for booking delete/////
cancel_booking();
?>		

