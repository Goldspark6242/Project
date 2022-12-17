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
    <h2 class="center">Upload Resume</h2>
<?php
if(isset($_POST["submit"])){
$target_directry="resume/";
$target_file=$target_directry.basename($_FILES["file"]["name"]);
if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
{
    // echo "<p class='success'Upload success</p>";
 $sql=   "UPDATE `student` SET `RESUME`='$target_file' WHERE id={$_SESSION['ID']}";
//    echo  $sql="insert into student (RESUME) values ('$target_file') WHERE id={$_SESSION['ID']}";
 $db->query($sql);
 echo "<p class='success'>Resume Uploaded success";
}else{
    echo "<p class='error'>Error in Upload</p>";
}
}

?>




<form class=form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
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



