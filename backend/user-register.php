<?php include 'connection.php';

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

if (empty(test_input($_POST['name']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $name = test_input($_POST['name']);
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
    echo "<script> window.history.go(-1);</script>";
} else {
    $checkemail = test_input($_POST['email']);
    if (!filter_var($checkemail, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Invalid email ')</script>";
    } else {
        $email = test_input($_POST['email']);
    }
}

if (empty(test_input($_POST['password']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";

} else {
    $password_text = test_input($_POST['password']);
    $password = md5($password_text);

}


//checking the validity of username
$all_users = "SELECT username FROM userauthentication WHERE username='" . $name . "'";
$all = mysqli_query($connection, $all_users);

if (mysqli_num_rows($all) > 0) {
    $errors = "error--name";
    echo "<script> alert('username already being used')</script>";
    echo "<script> window.history.go(-1);</script>";

} else {
    $username = $name;
}
//initialize user type
$type = 'gu';

//prepared statements
$userAuthenticationStmt = $connection->prepare("INSERT INTO userauthentication(username, password,usertype ) VALUES (?, ?, ?)");
$userAuthenticationStmt->bind_param("sss", $username, $password, $type);

$generalUserStmt = $connection->prepare("INSERT INTO generaluser(username, email,country ) VALUES (?, ?, ?)");
$generalUserStmt->bind_param("sss", $username, $email, $country);


if ($username == '' || $password == '' || $country == '' || $email == '') {
    echo "<script> alert('error in login')</script>";

} else {

    try {
        mysqli_autocommit($connection, FALSE);
        $userAuthenticationStmt->execute();
        $generalUserStmt->execute();
        mysqli_commit($connection);
        session_start();
        $_SESSION['username'] = $username;
        header("location: ../userinterface/user/user-profile.php");

    } catch (Exception $e) {
        $connection->rollback();
    }
}



