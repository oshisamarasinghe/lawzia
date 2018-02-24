<?php include "connection.php";
session_start();

/**
 * Created by PhpStorm.
 * User: oshadi
 * Date: 2/14/2018
 * Time: 10:44 AM
 */

$username =$_SESSION['username'];
function length($inputTxt,$length)
{
    $userInput = $inputTxt;
    if(strlen($userInput) == $length )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//validate data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors="";
if(test_input(empty($_POST['country']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
}else{
    $country=test_input($_POST['country']);
}

if(test_input(empty($_POST['category']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

}else{
    $category=test_input($_POST['category']);
}
if(test_input(empty($_POST['question']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

}else{
    $description=test_input($_POST['question']);
}


try {
    mysqli_autocommit($connection, FALSE);
    mysqli_query($connection, "INSERT INTO question( qDescription, qUser, qCategory, qDate,qCountry )
				VALUES('$description','$username','$category',now(),'$country')");
    mysqli_commit($connection);

}catch (Exception $e){
    $connection->rollback();
}
