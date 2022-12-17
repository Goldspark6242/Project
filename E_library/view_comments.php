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
    <h2 class="center">View Student Comments</h2>
<?php
$sql="SELECT  book.BTITLE,student.NAME,comment.COMM,comment.LOGS from comment INNER join book on comment.BID =book.BID INNER join student on comment.SID = student.ID ";
$result=$db->query($sql);
if($row=$result->num_rows>0){
echo "<table>
<tr>
<th>Sno</th>
<th>BOOK TITLE</th>
<th>NAME</th>
<th>COMMENT</th>
<th>LOGS</th></tr>";

$i=0;
while($row=$result->fetch_assoc())
{
    $i++;
    echo "<tr>
    <td>{$i}</td>
    <td>{$row['BTITLE']}</td>
    <td>{$row['NAME']}</td>
    <td>{$row['COMM']}</td>
    <td>{$row['LOGS']}</td>
    </tr>";
   


}



echo "</table>";



}else{
    echo "<p class='error'>No Student comments Found</p>";
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



