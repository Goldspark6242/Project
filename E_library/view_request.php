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
    <h2 class="center"> Students Requested</h2>
<?php
$sql="SELECT student.NAME,request.MESSAGE,request.LOGS FROM student INNER join  request on student.ID=request.ID ";
$result=$db->query($sql);
if($row=$result->num_rows>0){
echo "<table>
<tr>
<th>Sno</th>
<th>Name</th>
<th>Message</th>
<th>Logs</th></tr>";

$i=0;
while($row=$result->fetch_assoc())
{
    $i++;
    echo "<tr>
    <td>{$i}</td>
    <td>{$row['NAME']}</td>
    <td>{$row['MESSAGE']}</td>
    <td>{$row['LOGS']}</td>
    </tr>";
   


}



echo "</table>";



}else{
    echo "<p class='error'>No Students Request</p>";
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



