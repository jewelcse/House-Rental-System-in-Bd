<?php 

require_once "init.php";


global $db_connection;
if (isset($_GET['delete'])) {
	
    $the_delete_house_id = $_GET['delete'];

    find_image_by_id($the_delete_house_id);

 	$query  = "DELETE FROM house WHERE id = {$the_delete_house_id}";
	$delete_query = mysqli_query($db_connection,$query);

	if (!$delete_query ) {
		die("QUERY FAILED".mysqli_error($db_connection));
	}
	else{ 
		
		echo"<script>alert('Deleted Successfully');</script>";

		header("location:all_houses.php");
		} 
	} 

?>


function find_image_by_id($id){

	global $db_connection;

	$sql = "SELECT * FROM house WHERE id = '{$id}' ";

	$select_query = mysqli_query($db_connection,$sql);

	while ($row = mysqli_fetch_assoc($select_query)) {
	      $id = $row['id'];
		  $file = $row['house_image'];
	}

	$file = "images/$file";

if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }


}
