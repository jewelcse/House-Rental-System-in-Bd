<!DOCTYPE html>
<html>
	<head>
		

		<title>House Rental System</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header class="header">
			<div class="wrapper">
				<h1>HOUSE RENTAL SYSTEM</h1>
			</div>
		</header>

		<nav class="menu">
			<div class="wrapper">
				<ul>
					<a href="index.php"><li>Home</li></a>
					
					<a href="houses.php"><li>Houses</li></a>
					<a href="contact.php"><li>Contact Us</li></a>
					<a href="login.php"><li>Log In</li></a>
				</ul>
			</div>
		</nav>

		<div class="main">
			<div class="wrapper">
				

				<div class="booking-details">
					<h3>Contact Us</h3>
					<form>
						<span class="name">First Name</span>
						<input type="text" name="first_name" placeholder="First Name Please" /><br>

						<span class="name">Last Name</span>
						<input type="text" name="Last_name" placeholder="Last Name Please" /><br>

						<span class="name">E-Mail</span>
						<input type="email" name="email" placeholder="E-Mail Please" /><br>

						<span class="name">Contact No.</span>
						<input type="tel" name="contact" placeholder="Contact Number Please" /><br>

						<span class="name">Address</span>
						<textarea name="address" placeholder="Your Address Please"></textarea><br>

						<input type="submit" name="submit" placeholder="SEND" />
						<input type="reset" name="reset" placeholder="RESET" />


					</form>
				</div>


				
			</div>
		</div>
		<footer class="footer"> 
			<div class="wrapper">
				<p>&copy; <a href="#">House Rental System</a>.All rights reserved 2017.</p>
			</div>
		</footer>
	</body>

</html>