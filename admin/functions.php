<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<?php

function add_house(){

	global $connection;


if (isset($_POST['add_house'])) {
		
		
		 $house_name = $_POST['house_name'];

		 $image = $_FILES['house_image']['name'];
	     $image_temp = $_FILES['house_image']['tmp_name'];

	     


		 $date = date('d-m-y');
		 $house_rent = $_POST['house_rent'];
		 $description = $_POST['description'];
		 $address = $_POST['address'];
		 $category = $_POST['category'];
		// $location_map = $_POST['location_map'];

		 
		 $house_name = mysqli_real_escape_string($connection,$house_name);
		 $house_rent = mysqli_real_escape_string($connection,$house_rent);
		 $description = mysqli_real_escape_string($connection,$description);
		 $address = mysqli_real_escape_string($connection,$address);
		 $category = mysqli_real_escape_string($connection,$category);

		 move_uploaded_file($image_temp, "../images/$image");


		 $query = "INSERT INTO houses(house_id,category,house_name,house_image,house_rent,added_date,description,address) VALUES('','$category','$house_name','$image','$house_rent',now(),'$description','$address')";

		 $house_insert_query  = mysqli_query($connection,$query);


		 if (!$house_insert_query) {
		 	
		 	die("QUERY FAIELD".mysqli_error($connection));
		 }

		 else{

		 	header("location:index.php?source=all_houses");

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

	header("location:index.php?source=all_houses");
}

}


}



function add_category(){

global $connection;

if (isset($_POST['add_category'])) {
	

	$category_name =  $_POST['cat_name'];




$query = "INSERT INTO category(cat_id,cat_name) ";
$query .= "VALUES('','$category_name')" ;

$add_category_query = mysqli_query($connection,$query);

if (!$add_category_query) {
	die("QUERY FAILED".mysqli_error($connection));
}

else{

	header("location:index.php?source=all_categories");
}



}

}

function delete_category(){

	global $connection;


if (isset($_GET['delete_cat'])) {
	
  $the_delete_category_id = $_GET['delete_cat'];



$query  = "DELETE FROM category WHERE cat_id = {$the_delete_category_id}";


$delete_query = mysqli_query($connection,$query);

if (!$delete_query ) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	header("location:index.php?source=all_categories");
}

}


}


function delete_users(){

	global $connection;


if (isset($_GET['delete_user'])) {
	
  $user_delete_query = $_GET['delete_user'];



$query  = "DELETE FROM users WHERE user_id = {$user_delete_query}";


$user_delete_query = mysqli_query($connection,$query);

if (!$user_delete_query ) {
	die("QUERY FAILED".mysqli_error($connection));
}
else{

	header("location:index.php?source=all_users");
}

}


}





















?>

