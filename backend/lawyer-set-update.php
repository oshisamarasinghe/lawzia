<?php include 'connection.php';

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
if(empty(test_input($_POST['p_add']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $pAdd=test_input($_POST['p_add']);
}

if(empty(test_input($_POST['w_email']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $wEmail=test_input($_POST['w_email']);
}
if(empty(test_input($_POST['w_add']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $wAdd=test_input($_POST['w_add']);
}
if(empty(test_input($_POST['w_name']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['w_name']))== false ){
    $errors="Invalid company  Name";
    echo "<script> alert('Invalid company Name')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $wName=test_input($_POST['w_name']);
}

if(empty(test_input($_POST['w_tel']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $wContact=test_input($_POST['w_tel']);
}
if(empty(test_input($_POST['summary']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $summaryt=test_input($_POST['summary']);
}
if(empty(test_input($_POST['area_list[]']))){
    $errors="please selet at least one";
    echo "<script> alert('select one atleast')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $areas=implode(',',$_POST['area_list']);
}
$type='lu';
mysqli_query($connection,"INSERT INTO user(username, password,user_type )VALUES('$username','$password','$type')");
if(mysqli_affected_rows($connection) > 0){
    echo "<script> alert('Welcome to LAWZIA|added to user')</script>";
}else{
    echo "<h6>user not added.</h6>".$connection->error;
}

//Execute the query
mysqli_query($connection,"INSERT INTO lawyer(email,country, fname, lname, contact, title)
				VALUES('$username','$email','$password','$country','$fname','$lname','$contact','$title','$reg')");


if(mysqli_affected_rows($connection) > 0){
    $_SESSION['username'] = $username;
    header("location: ../userinterface/lawyer-first-profile.php");
    echo "<script> alert('Welcome to LAWZIA')</script>";
}else{
    echo "<h6>user not added.</h6>".$connection->error;
}
