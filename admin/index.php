<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>

<!--header section --->
<?php include"includes/header.php" ; ?>

<!--navigation section --->
<?php include"includes/admin_navigation.php" ; ?>






<?php

if (isset($_GET['source'])) {
	
  $the_source_item = $_GET['source'];


 switch ($the_source_item) {

 	case 'all_houses':

 		include "all_houses.php";
 		break;
 	
 	case 'add_house':

 		include "add_houses.php";
 		break;

 	case 'add_category':

 		include "category.php";
 		break;
 	
 	case 'all_categories':

 		include "all_category.php";
 		break;

 	case 'all_users':

 		include "users.php";
 		break;

 	case 'booking_details':

 		include "booking_details.php";
 		break;

 	default:
 		include "index.php";
 		break;
 }

}

?>
