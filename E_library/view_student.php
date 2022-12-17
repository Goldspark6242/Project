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
    <h2 class="center"> Students Details</h2>
<?php
$sql="select * from student";
$result=$db->query($sql);

echo "<table>
<tr>
<th>Sno</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Resume</th>
</tr>";
if($row=$result->num_rows>0){


$i=0;
while($row=$result->fetch_assoc())
{
    $i++;
    echo "<tr>
    <td>{$i}</td>
    <td>{$row['NAME']}</td>
    <td>{$row['MAIL']}</td>
    <td>{$row['DEP']}</td>
    <td><a href='{$row["RESUME"]}' class='anchor' target='_blank'>Resume</a></td>
    </tr>";
   


}



echo "</table>";



}else{
    echo "<p class='error'>No Students Records Found</p>";
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



