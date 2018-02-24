<?php include 'connection.php';
session_start();
$username =$_SESSION['username'];

if (isset($_POST['insert'])) {

    $file=$_FILES['image'];
    $fileName=$_FILES['image']['name'];
    $fileTmpName=$_FILES['image']['tmp_name'];
    $fileSize=$_FILES['image']['size'];
    $fileError=$_FILES['image']['error'];
    $fileType=$_FILES['image']['type'];

    $fileExt=explode('.',$fileName);
    $actExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png');
     if(in_array($actExt,$allowed)){
         if($fileError===0){
             if($fileSize<1000000){
                 $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                 $query = "INSERT INTO lawyerimage(username,image) VALUES('$username','$image') ";
                 if ($is_query_run = mysqli_query($connection, $query)) {
                     echo "<script>alert('successful')</script>";

                 }

             }else{
                 echo "<script>alert('Your file is too large')</script>";
             }

         }else{
             echo "<script>alert('Error uploading the file')</script>";
         }
     }else{
         echo "<script>alert('You cant upload file of this type')</script>";
     }

}
