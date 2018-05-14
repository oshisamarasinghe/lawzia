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
    $checkemail=test_input($_POST['email']);
    if(!filter_var($checkemail, FILTER_VALIDATE_EMAIL)){
       echo"<script> alert('Invalid email ')</script>";
    }else{
        $email=test_input($_POST['email']);
    }
}

if(empty(test_input($_POST['password']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";

}else{
    $pwd=test_input($_POST['password']);
    if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $pwd)){
        echo '<script>alert("Your password is good")</script>';
        $password_text=test_input($_POST['password']);
        $password=md5($password_text);
    } else {
        echo "Your password is weak.Try another";
    }

}
$type='gu';

try{
    mysqli_autocommit($connection,FALSE);
    //$list_of_userNames="SELECT username from userauthentication";

    mysqli_query($connection,"INSERT INTO userauthentication(username, password,usertype )VALUES('$username','$password','$type')");
    mysqli_query($connection,"INSERT INTO generaluser(username,email,country)
				VALUES('$username','$email','$country')");

    mysqli_commit($connection);
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../userinterface/user/user-profile.php");

}catch (Exception $e){
    $connection->rollback();
}


