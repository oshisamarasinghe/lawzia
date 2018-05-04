<?php include 'connection.php';

session_start();

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
    $qCountry = test_input($_POST['country']);
}

if (empty(test_input($_POST['category']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

} else {
    $qCategory = test_input($_POST['category']);
}

$_SESSION['username'] = $username;
header("location: ../userinterface/lawyer/QA-lawyer.php");

?>





