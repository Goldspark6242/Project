<?php     
include 'db.php';
session_start();

if(!isset($_SESSION["ID"])){
    header("location:ulogin.php");
}

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
    <h2 class="center">Change Password</h2>
<?php
if(isset($_POST["submit"])){
$sql="select * from student where PASS='{$_POST["old_password"]}' and ID='{$_SESSION["ID"]}'    ";
$result=$db->query($sql);
if($result->num_rows>0){
$s="update student set PASS='{$_POST["new_password"]}' where ID=".$_SESSION["ID"];
$db->query($s);
echo "<p class='success'>Password Update Success</p>";
}else{
    echo "<p class='error'>Invalid Password</p>";
}
}


?>
<form class="form" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label>Old Password</label>
    <input type="password" name="old_password">
    <label>New Password</label>
    <input type="password" name="new_password">
    <button type="submit" name="submit">Update Password</button>
</form>


    </div>
    <div class="nav">
       <?php
      include "unav.php";
       ?>
    </div>
<div class="footer">
    <p>Copyright &copy; THANGARAJ</p>
</div>





    </div>
</body>
</html>



