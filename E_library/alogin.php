<?php
session_start();
include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_LIBRARY</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <div class="title">
       <h1> THANGARAJ</h1>
    </div>
    <div class="wrapper">
   <h2 class="center">Admin Login</h2>




<form class="form" action="alogin.php" method="post">
    <label>User Name </label>
    <input type="text" name="aname" required>
    <label>Password </label>
    <input type="password" name="apassword" required>
    <button type="submit" name="submit">Submit</button>
</form>

<?php 
if(isset($_POST["submit"])){
    $sql="SELECT * FROM admin WHERE ANAME='{$_POST["aname"]}' and APASS='{$_POST["apassword"]}'";
    $result=$db->query($sql);
    if($result->num_rows>0){
$row=$result->fetch_assoc();
$_SESSION["AID"]=$row["AID"];
$_SESSION["ANAME"]=$row["ANAME"];
header("location:ahome.php");
    }else{
        echo "<p class='error'>Error</p>";
    }

}

?>
    </div>
    <div class="nav">
       <?php
      include "sidenav.php";
       ?>
    </div>
<div class="footer">
    <p>Copyright &copy; THANGARAJ</p>
</div>





    </div>
</body>
</html>



