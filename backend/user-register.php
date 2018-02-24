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


if(empty(test_input($_POST['name']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else if(ctype_alpha(test_input($_POST['name']))== false ){
    $errors="Invalid Username";
    echo "<script> alert('Invalid username')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $username=test_input($_POST['name']);
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
$type='gu';

try{
    mysqli_autocommit($connection,FALSE);
    mysqli_query($connection,"INSERT INTO userauthentication(username, password,usertype )VALUES('$username','$password','$type')");
    mysqli_query($connection,"INSERT INTO generaluser(username,email,country)
				VALUES('$username','$email','$country')");

    mysqli_commit($connection);
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../userinterface/user-profile.php");

}catch (Exception $e){
    $connection->rollback();
}


