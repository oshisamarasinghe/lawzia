<?php include 'connection.php';
session_start();
$username = $_SESSION['username'];

if (isset($_POST['insert'])) {

    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $actExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    //checking whether profile is updated already

    $profileImage = "SELECT Image FROM lawyerimage WHERE username='" . $username . "'";
    if($is_query_run = mysqli_query($connection, $profileImage)) {
        while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
            $pImage = $row['Image'];

        }
    }


    if (in_array($actExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

                //update or insert
                if(empty($pImage)){
                    $query = "INSERT INTO lawyerimage(username,Image) VALUES('$username','$image') ";
                    if ($is_query_run = mysqli_query($connection, $query)) {
                        echo "<script>alert('insert successful')</script>";

                    }
                }else{
                    $query="UPDATE lawyerimage SET Image='".$image."' WHERE username='".$username."'";
                    if ($is_query_run = mysqli_query($connection, $query)) {
                        echo "<script>alert('update successful')</script>";

                    }
                }


            } else {
                echo "<script>alert('Your file is too large')</script>";
            }

        } else {
            echo "<script>alert('Error uploading the file')</script>";
        }
    } else {
        echo "<script>alert('You cant upload file of this type')</script>";
    }

}
