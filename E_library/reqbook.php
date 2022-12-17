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
    <h2 class="center">New Book Request</h2>
<?php
if(isset($_POST['submit'])){
    $sql="insert into request(ID,MESSAGE,LOGS) values ({$_SESSION['ID']},'{$_POST["msg"]}',now())";
   $db->query($sql);
echo "<p class='success'>Your Comment Submited Successfully...</p>";
}

?>



<form class="form" action="<?php echo $_SERVER["PHP_SELF"] ; ?>" method="post">
<label>Message</label>
<textarea name="msg"></textarea>
<button type="submit" name="submit">Submit Comment</button>
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



