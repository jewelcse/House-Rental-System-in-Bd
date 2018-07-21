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

if (isset($_GET['your_adds'])) {
	

	$user_id =  $_GET['your_adds'];


if ($user_id==true) {
	

$uid = $_SESSION['user_id'];

$query = "SELECT * FROM houses WHERE user_id  = $uid order by house_id desc";

$select_users_house_details_query = mysqli_query($connection,$query);


$user_house_count = mysqli_num_rows($select_users_house_details_query);

if ($user_house_count ==0) {

	echo "<h1>Yours add:<span class='badge badge-secondary'>0 </span></h1><h3><strong>No</strong> houses are available!!!</h3>";
}

else{



?>



<h1>Yours add:<span class="badge badge-secondary"><?php echo $user_house_count; ?> </span></h1><hr>

<?php 

$user_house_count =1;


while($row = mysqli_fetch_array($select_users_house_details_query)){

		 $house_id = $row['house_id'];
		 $house_name = $row['house_name'];
		 $house_image = $row['house_image'];
		 $house_rent = $row['house_rent'];
		 $house_description = $row['description'];
		 $house_address = $row['address'];
?>
	
<table class="table table-hover">
	
	<tbody>
		<tr>
			<td><?php  echo $user_house_count++   ; ?></td>
			<td><?php  echo $house_name   ; ?></td>
			<td><img src="images/<?php  echo $house_image  ; ?>"width='100px' height='80px'></td>
			<td><?php  echo $house_rent   ; ?></td>
			<td><?php  echo $house_description  ; ?></td>
			<td><?php  echo $house_address ; ?></td>
			<td><a href="user_edit_add.php?edit_add=<?php echo $house_id ; ?>">
<button type="button" class="btn btn-primary">Edit add</button></a></td>

<td><a href="your_adds.php?delete_add=<?php echo $house_id ; ?>">
<button type="button" class="btn btn-primary">Delete add</button></a></td>
		</tr>
	</tbody>
</table>



<?php } } ?>







<?php 




}

else{

	include "no_user.php";
}

}
///////query for user add delete/////

delete_user_add();



?>		

