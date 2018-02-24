<?php include 'connection.php';


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


if(empty(test_input($_POST['title']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $title=test_input($_POST['title']);
}
if(empty(test_input($_POST['fname']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['fname']))== false ){
    $errors="Invalid fname";
    echo "<script> alert('Invalid fname')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $fname=test_input($_POST['fname']);
}

if(empty(test_input($_POST['lname']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['lname']))== false ){
    $errors="Invalid last Name";
    echo "<script> alert('Invalid last Name')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $lname=test_input($_POST['lname']);
}


if(empty(test_input($_POST['contact']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $contact=test_input($_POST['contact']);
}

if(test_input(empty($_POST['country']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $country=test_input($_POST['country']);
}

if(empty(test_input($_POST['email']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $email=test_input($_POST['email']);
}
if(empty(test_input($_POST['username']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['username']))== false ){
    $errors="Invalid username";
    echo "<script> alert('Invalid username')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $username=test_input($_POST['username']);
}

if(empty(test_input($_POST['password']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['password']))== false ){
    $errors="Invalid password";
    echo "<script> alert('Invalid Password')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $password_text=test_input($_POST['password']);
    $password=md5($password_text);
}
$type='lu';


try{
    mysqli_autocommit($connection,FALSE);
    mysqli_query($connection,"INSERT INTO userauthentication(username, password,usertype )VALUES('$username','$password','$type')");
    mysqli_query($connection,"INSERT INTO lawyer(username, email, country, fName, lName, contact, title)
				VALUES('$username','$email','$country','$fname','$lname','$contact','$title')");
    mysqli_commit($connection);
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../UI/lawyer-first-profile.php");

}catch (Exception $e){
    $connection->rollback();
}
