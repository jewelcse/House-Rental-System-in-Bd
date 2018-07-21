<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<!--calling function --->
<?php include"functions.php" ; ?>


<div class="container">
	<div class="row">
		<div class="title_head">
			<h2>Users : </h2>
		</div>
		<table class="table table-bordered">
			
			<thead>
				<tr>
					<th>User Id</th>
					<th>User Firstame</th>
					<th>User Lastname</th>
					<th>Username</th>
					<th>Email</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				   
<?php 


$query = "SELECT * FROM users";

$select_all_users_query = mysqli_query($connection,$query);


while ($row = mysqli_fetch_assoc($select_all_users_query)) {
	
	 $user_id = $row['user_id'];
	 $user_firstname = $row['user_firstname'];
	 $user_lastname = $row['user_lastname'];
	 $username = $row['username'];
	 $email = $row['user_email'];
	
?>

				<tr>
					<td><?php echo $user_id ?></td>
					<td><?php echo $user_firstname ?></td>
					<td><?php echo $user_lastname ?></td>
					<td><?php echo $username ?></td>
					<td><?php echo $email ?></td>
					<td><a href="users.php?delete_user=<?php echo $user_id ?>">Delete</a></td>
					
				</tr>

<?php }  ?>



			</tbody>
		</table>
	</div>
</div>



						
<?php

delete_users();

?>
				    	
				    	
				    					    	
				        
					
				    	

