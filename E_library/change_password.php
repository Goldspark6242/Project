<?php     
include 'db.php';
session_start();

if(!isset($_SESSION["AID"])){
    header("location:alogin.php");
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

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="form">
    <label>Old Password</label>
    <input type="password" name="old_password">
    <label>New Password</label>
    <input type="password" name="new_password">
    <button type="submit" name="submit">Update Password</button>
</form>


<?php
if(isset($_POST['submit'])){
$sql="select * from admin where APASS='{$_POST["old_password"]}' and AID='{$_SESSION["AID"]}' ";
$result=$db->query($sql);
if($result->num_rows>0){
$s="update admin set APASS='{$_POST["new_password"]}' where AID=".$_SESSION["AID"];
$db->query($s);
echo "<p class='success'>Password Update Success</p>";
}else{
    echo "<p class='error'>Invalid Password</p>";
}
}


?>

    </div>
    <div class="nav">
       <?php
      include "anav.php";
       ?>
    </div>
<div class="footer">
    <p>Copyright &copy; THANGARAJ</p>
</div>





    </div>
</body>
</html>



