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
    <h2 class="center">View Books</h2>
<?php
$sql="select * from book";
$result=$db->query($sql);
if($row=$result->num_rows>0){
echo "<table>
<tr>
<th>Sno</th>
<th>Book Name</th>
<th>Keyword</th>
<th>View</th></tr>";

$i=0;
while($row=$result->fetch_assoc())
{
  
    $i++;
    echo "<tr>
    <td>{$i}</td>
    <td>{$row['BTITLE']}</td>
    <td>{$row['KEYWORDS']}</td>
    <td><a href='{$row["FILE"]}' class='anchor' target='_blank'>VIEW</a></td>
    </tr>";
   


}



echo "</table>";



}else{
    echo "<p class='error'>Your book not Found</p>";
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



