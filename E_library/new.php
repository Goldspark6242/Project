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
   <h2 class="center">New User</h2>




<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post" class=form>
    <label>User Name </label>
    <input type="text" name="name" required>
    <label>Password </label>
    <input type="password" name="pass" required>
    <label >Email</label>
    <input type="email" name="email" required>
    <label >Qualification </label>
    <select name="dep" required>
    <option value="">select</option>
    <option value="10">SSLC</option>
    <option value="12">HSC</option>
    <option value="UG">UG</option>
    <option value="PG">PG</option>
    <option value="ITI">ITI</option>
    <option value="DIPLOMA">DIPLOMA</option>
    <option value="OTHERS">OTHERS</option>
</select>
    <button type="submit" name="submit">Submit</button>
</form>

<?php 
if(isset($_POST["submit"])){
    $sql="insert into student (NAME,PASS,MAIL,DEP) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["email"]}','{$_POST["dep"]}')";
    $db->query($sql);
    echo "<p class='success'>User Register Success</p>";
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



