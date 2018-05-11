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

$areas = implode(',', $_POST['area_list']);

try{
    mysqli_autocommit($connection,FALSE);
    mysqli_query($connection,"INSERT INTO lawyerpractisearea(username,area)VALUES('$username','$areas')");
    mysqli_commit($connection);
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../userinterface/lawyer/lawyer-profile.php");


}catch (Exception $e){
    $connection->rollback();
}