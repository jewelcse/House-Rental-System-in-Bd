<!--connection to database --->
<?php include"includes/db_connect.php" ; ?>


<!--connection to functions file --->
<?php include"functions.php" ; ?>


<?php

//////////query for house add////

add_category();

?>
<div class="container">
	<div class="row">
		<div class="col-md-offset 2 col-md-8 col-md-offset-2">
			<div class="head_title">
				<h2>Add Category</h2>
			</div>
				<hr>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="cat_name">Category Name  :</label>
					<input type="text" class="form-control" name="cat_name" placeholder="Category name..." required>
				</div>

				<button type="submit" class="btn btn-primary" name="add_category">Add category</button>
				
			</form>
		</div><!--/.col-md-offset 2 col-md-8 col-md-offset-2-->
	</div><!--/.row-->
</div><!--/.container-->

