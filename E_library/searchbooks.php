<?php     
include 'db.php';
session_start();

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
    <h2 class="center">Search Book</h2>



<form class="form" action="<?php echo $_SERVER["PHP_SELF"] ; ?>" method="post">
<label>Enter Book name or Keywords</label>
<textarea name="msg" required></textarea>
<button type="submit" name="submit">Search Books</button>
</form>
<?php
if(isset($_POST['submit'])){
$sql="select * from book where BTITLE like '%{$_POST["msg"]}%' or KEYWORDS like '%{$_POST["msg"]}%'";
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
    // print_r( $row["FILE"])
    // $erow=chop($row["FILE"],"../");
    // print_r($erow);
    $i++;
    echo "<tr>
    <td>{$i}</td>
    <td>{$row["BTITLE"]}</td>
    <td>{$row["KEYWORDS"]}</td>
    <td><a href='{$row["FILE"]}' class='anchor' target='_blank'>VIEW</a></td>
    </tr>";

}

echo "</table>";

}else{
    echo "<p class='error'>Your Book not Found</p>";
}
}
?>
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



