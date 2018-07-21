
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

	<h3>Login Form</h3><hr>

	</div>

<div class="form-body">

	<form action="" method="post">
		
		<div class="form-group">
			<label for="username">Username  :</label>
			<input type="text" name="username" placeholder="Enter Username Please...">
		</div>
	
		<div class="form-group">
			<label for="user_password">Password  :</label>
			<input type="password" name="user_password" value="FakePSW" id="myInput" placeholder="Enter Password Please...">
			<input type="checkbox" onclick="myFunction()">Show Password
		</div>

		<button type="submit" class="btn btn-primary" name="login_account">Login</button>
	</form>
<div class="have-no-account">
<small>Don't have an Account ?</small>
<a href="sign_up.php">Create Account</a>
	</div>
</div>
</div>

<?php



if (isset($_POST['login_account'])) {

	$username = $_POST['username'];
	$user_password = $_POST['user_password'];




$query  = "SELECT * FROM users  WHERE username = '{$username}' " ; 

$user_select_query  = mysqli_query($connection,$query);


while($row = mysqli_fetch_assoc($user_select_query)){


	 $db_user_id = $row['user_id'];
	 $db_username = $row['username'];
	 $db_user_password = $row['user_password'];
	 $db_user_firstname = $row['user_firstname'];
	 $db_user_lastname = $row['user_lastname'];
	 $db_user_email = $row['user_email'];






if ($db_username == $username && $db_user_password == $user_password ) {

	
	$_SESSION['user_id']   = $db_user_id;
	$_SESSION['username']  = $db_username;
	$_SESSION['user_firstname']  = $db_user_firstname;
	$_SESSION['user_lastname']  = $db_user_lastname;
	$_SESSION['user_email']  = $db_user_email;
	
	
echo "<div class='alert alert-success'>Login successfull<p>go back to home page</p></div>";



	


}

else{

	echo  "<div class='alert alert-danger'>username or password is incorrect</div>";
}

}

}




?>




<!---- footer section -->
<?php //include "includes/footer.php" ; ?>

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