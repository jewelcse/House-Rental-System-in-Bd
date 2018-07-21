
<!---- database connection -->
<?php include "includes/db_connect.php" ; ?>

<!---- header section -->
<?php include "includes/header.php" ; ?>

<!--header section --->
<?php include"header_section.php" ; ?>


<!---- navigation section -->
<?php include "includes/user_navigation.php" ; ?>


<div class="col-md-offset-3 col-md-6">

<div class="form-header">

<h3>Registation Form</h3><hr>

</div>

<div class="form-body">
	<form action="" method="post">
		<div class="form-group">
			<label for="user_firstname">First Name  :</label>
			<input type="text" name="user_firstname" placeholder="Enter First Name Please...">
		</div>
		<div class="form-group">
			<label for="user_lastname">Last Name  :</label>
			<input type="text" name="user_lastname" placeholder="Enter Last Name Please...">
		</div>
		<div class="form-group">
			<label for="username">Username  :</label>
			<input type="text" name="username" placeholder="Enter Username Please...">
		</div>
		<div class="form-group">
			<label for="user_email">Email  :</label>
			<input type="email" name="user_email" placeholder="Enter Email Please...">
		</div>
		<div class="form-group">
			<label for="user_password">Password  :</label>
			<input type="password" name="user_password" value="FakePSW" id="myInput"  placeholder="Enter Password Please...">
			<input type="checkbox" onclick="myFunction()">Show Password
		</div>

		<button type="submit" class="btn btn-primary" name="create_user_account">Create</button>
	</form>


	</div>



<?php

if (isset($_POST['create_user_account'])) {
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$username = $_POST['username'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];


$query  = "INSERT INTO users(user_id,user_firstname,user_lastname,username,user_email,user_password) ";
$query .= "VALUES ('','$user_firstname','$user_lastname','$username','$user_email','$user_password')" ;

$user_insert_query  = mysqli_query($connection,$query);

if (!$user_insert_query) {
	die("query failed".mysqli_error($connection));
}

else{

	echo "<div class='alert alert-success'>Registation Completed!!!!</div>";
}


}


?>


<script>
	function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}



</script>

























