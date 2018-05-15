<?php include "connection.php";
session_start();
echo 'hello in the question';

$username = $_SESSION['username'];
function length($inputTxt, $length)
{
    $userInput = $inputTxt;
    if (strlen($userInput) == $length) {
        return true;
    } else {
        return false;
    }
}

//validate data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors = "";
if (empty(test_input($_POST['country']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
} else {
    $country = test_input($_POST['country']);
}

if (empty(test_input($_POST['category']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

} else {
    $category = test_input($_POST['category']);
}

if (empty(test_input($_POST['title']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('please enter a relevant title')</script>";

} else {
    $title = test_input($_POST['title']);
}
if (empty(test_input($_POST['question']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

} else {
    $description = test_input($_POST['question']);
}


try {
    mysqli_autocommit($connection, FALSE);
    mysqli_query($connection, "INSERT INTO question( qTitle,qDescription, qUser, qCategory, qDate,qCountry )
				VALUES('$title','$description','$username','$category',now(),'$country')");
    mysqli_commit($connection);
    echo "<script> alert('Question submitted successfully')</script>";
    header("location:../userinterface/user/all-questions-user.php");

} catch (Exception $e) {
    echo "<script> alert($e)</script>";
    $connection->rollback();
}
