<?php     
include 'db.php';
session_start();
function countrecord($sql,$db)
{
    $result=$db->query($sql);
    return $result->num_rows;
}
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
    <h2 class="center">Welcome Admin</h2>

<ul>
    <li>Total Student  :<?php echo countrecord("select * from student",$db);?> </li>
    <li>Total Books  :<?php echo countrecord("select * from book",$db);?> </li>
    <li>Total Request  :<?php echo countrecord("select * from request",$db);?> </li>
    <li>Total Comment  :<?php echo countrecord("select * from comment",$db);?> </li>
   
</ul>




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



