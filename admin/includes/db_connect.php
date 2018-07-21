<?php



$connection  = mysqli_connect("localhost","root","","houserent");


if ($connection) {
	
	//echo "connected";
	


}

else{


	die("QUERY FAIELD".mysqli_error($connection));

}


?>