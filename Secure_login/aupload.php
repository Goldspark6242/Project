<?php




















// session_start();
// ob_start();

// if(!isset($_SESSION['id'])){
//     header("location:login.php");
// }
// $id=$_SESSION['id'];
// // print_r($id);
// include 'db.php';

// if(isset($_POST['submit'])){

//     extract($_POST);
 
//      $file=$_FILES['file']['tmp_name'];
//      $fileName = "upload/".time().$_FILES['file']['name'];
 
//      //file format check
//      $fileExt = explode('.', $fileName);
 
//      $fileActualExt = strtolower(end($fileExt));
 
//      $allowed = array('jpg', 'jpeg', 'png', 'pdf','tmp','gif');
 
//      if(in_array($fileActualExt, $allowed)){
//          if(move_uploaded_file($file,$fileName)){
 
//              $sql="UPDATE `table` SET `aadhar`='$fileName' WHERE id=$id";
 
//              if($db->query($sql)){
//                 $msg="Upload successfully";
             
//                  header("location:home.php?msg=$msg");
//              }else{
//                  $msg= "Upload Error";
//              }
 
//          }
//          else{
//             $msg= "There was an error uploading your file";
//          }
//      }
//      else{
//         $msg= "You cannot upload files of this type";
//      }        
 
 
//  }

    
    ?>
