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
    echo "<script> alert('error-complete first name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else if (ctype_alpha(test_input($_POST['fname'])) == false) {
    $errors = "Invalid fname";
    echo "<script> alert('Invalid fname')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $fname = test_input($_POST['fname']);
}

if (empty(test_input($_POST['lname']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete last name')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else if (ctype_alpha(test_input($_POST['lname'])) == false) {
    $errors = "Invalid last Name";
    echo "<script> alert('Invalid last Name')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $lname = test_input($_POST['lname']);
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
    echo "<script> alert('error-complete all fields')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $checkEmail = test_input($_POST['email']);
    if (!filter_var($checkEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Invalid email ')</script>";
    } else {
        $email = test_input($_POST['email']);
    }
}

if (empty(test_input($_POST['w_email']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    // echo "<script> window.history.go(-1);</script>";
} else {
    $checkWEmail = test_input($_POST['w_email']);
    if (!filter_var($checkWEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Invalid email ')</script>";
    } else {
        $wEmail = test_input($_POST['w_email']);
    }
}

if (empty(test_input($_POST['w_position']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work position')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $wPosition = test_input($_POST['w_position']);
}

if (empty(test_input($_POST['exp']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete experience')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $experience = test_input($_POST['exp']);
}

if (empty(test_input($_POST['w_street']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work street')</script>";
    // echo "<script> window.history.go(-1);</script>";
} else {
    $wStreet = test_input($_POST['w_street']);
}

if (empty(test_input($_POST['w_city']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work city')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $wCity = test_input($_POST['w_city']);
}

if (empty(test_input($_POST['w_country']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work country')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $wCountry = test_input($_POST['w_country']);
}
if (empty(test_input($_POST['w_name']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company name')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $wName = test_input($_POST['w_name']);
}

if (empty(test_input($_POST['w_tel']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company contact')</script>";
    //echo "<script> window.history.go(-1);</script>";
} else {
    $wContact = test_input($_POST['w_tel']);
}
//echo $experience, $wCountry, $wStreet;

//$areas = implode(',', $_POST['area_list']);


//Execute the query

try {

    mysqli_autocommit($connection, FALSE);
    mysqli_query($connection, "UPDATE lawyer SET email='$email',fName='$fname',lName='$lname',country='$country',
  title='$title' ,workPosition='$wPosition' ,workCompany='$wName', workExperience='$experience',
  workEmail='$wEmail',workContact='$wContact',workAddStreet='$wStreet',workAddCity='$wCity',workAddCountry='$wCountry' 
  WHERE username='" . $username . "'");
    mysqli_commit($connection);
    header("location: ../userinterface/lawyer/lawyer-profile-update.php");


} catch (Exception $e) {
    $connection->rollback();
}