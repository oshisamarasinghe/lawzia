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


if (empty(test_input($_POST['title']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete title')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $title = test_input($_POST['title']);
}
if (empty(test_input($_POST['fname']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else if (ctype_alpha(test_input($_POST['fname'])) == false) {
    $errors = "Invalid fname";
    echo "<script> alert('Invalid fname')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $fname = test_input($_POST['fname']);
}

if (empty(test_input($_POST['lname']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete last name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else if (ctype_alpha(test_input($_POST['lname'])) == false) {
    $errors = "Invalid last Name";
    echo "<script> alert('Invalid last Name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $lname = test_input($_POST['lname']);
}

if (empty(test_input($_POST['contact']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $contact = test_input($_POST['contact']);
}

if (test_input(empty($_POST['country']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $country = test_input($_POST['country']);
}

if (empty(test_input($_POST['email']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete email')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $email = test_input($_POST['email']);
}


if (empty(test_input($_POST['w_email']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work email')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wEmail = test_input($_POST['w_email']);
}
if (empty(test_input($_POST['w_add']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work address')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wAdd = test_input($_POST['w_add']);
}
if (empty(test_input($_POST['w_name']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wName = test_input($_POST['w_name']);
}

if (empty(test_input($_POST['w_tel']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company contact')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wContact = test_input($_POST['w_tel']);
}
if (empty(test_input($_POST['summary']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete summary')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $summaryt = test_input($_POST['summary']);
}

    $areas = implode(',', $_POST['area_list']);





//Execute the query

try{
    mysqli_autocommit($connection,FALSE);
    mysqli_query($connection, "UPDATE lawyer SET 'email'='$email','fName'='$fname','lName'='$lname','country'='$country',
  'contact'='$contact','title'='$title'");
    mysqli_query($connection,"INSERT INTO lawyerpractisearea(username,area)VALUES('$username','$areas')");
    mysqli_commit($connection);



}catch (Exception $e){
    $connection->rollback();
}