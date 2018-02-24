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
if(test_input(empty($_POST['country']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $country=test_input($_POST['country']);
}
$lawyer_country="SELECT * FROM lawyer WHERE country='.$country.'";

if ($is_query_run=mysqli_query($connection ,$lawyer_country)){
    while($row=mysqli_fetch_array($is_query_run,MYSQL_ASSOC)) {
        $username=$row['username'];
        $fName=$row['fName'];
        $lName=$row['lName'];
        $email=$row['email'];
    }
}

$lawyer_profile="SELECT * FROM lawyerworkprofile WHERE username='.$username.'";

if ($is_query_run=mysqli_query($connection ,$lawyer_profile)){
    while($row=mysqli_fetch_array($is_query_run,MYSQL_ASSOC)) {
        $wName=$row['wpName'];
        $wAdd=$row['wpAdd'];
        $wContact=$row['wpContact'];
        $wEmail=$row['wpEmail'];
    }
}










