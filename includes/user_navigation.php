<!--connection to database --->
<?php include"db_connect.php" ; ?>

<style type="text/css">
  
  nav.navbar {
    background-color: #333;
}
.dropdown-menu {
    
    min-width: 100px;
}
</style>





<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">HouseRentSystem</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>

      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category
             
             <b class="caret"></b></a>
             <ul class="dropdown-menu">


<?php 
$query = "SELECT * FROM category";

$select_category_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($select_category_query)){

$category_id = $row['cat_id'] ; 
$category_name = $row['cat_name'] ; 


?>

      
      
            
            
             <li>
               <a href="category.php?cat_id=<?php echo $category_id ; ?>"><?php echo $category_name ; ?></a>
            </li>
            <li class="divider"></li>
        
            
         


        <?php } ?>
        </ul>

         </li>

      <li><a href="#">Contact</a></li>
      <li><a href="#">About</a></li>
    </ul>
  
                 <ul class="nav navbar-nav navbar-right">
                   
                      <li>
                         <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                      </li>
                  
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"><?php 

                      if (isset($_SESSION['username'])) {

                        $uid = $_SESSION['user_id'];
                        
                        echo $_SESSION['username'];


                      }
                      else{

                        $_SESSION['user_id'] ='';
                        echo "Guest";


                      }


                      ?></i> 
             
             <b class="caret"></b></a>
            
            <ul class="dropdown-menu">
             <li>
               <a href="users.php?uid=<?php echo $_SESSION['user_id'];?> "><i class="fa fa-fw fa-user"></i>My Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="your_adds.php?your_adds=<?php echo $_SESSION['user_id'];?> "><i class="fa fa-cog fa-spin"></i> My adds</a>
            </li>
            <li class="divider"></li>
            <li>
               <a href="your_booking.php?your_bookings=<?php echo $_SESSION['user_id'];?> "><i class="fa fa-cog fa-spin"></i> My Bookings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        
            </ul>


          </li>
        
      
        </ul>
  </div>
</nav>













