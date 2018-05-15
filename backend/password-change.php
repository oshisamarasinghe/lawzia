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

if (empty(test_input($_POST['username']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $n_username = test_input($_POST['username']);
}


if (empty(test_input($_POST['old_password']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $old_password = test_input($_POST['old_password']);
}
if (empty(test_input($_POST['new_password']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $new_password = test_input($_POST['new_password']);
}
if (empty(test_input($_POST['retype_password']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $c_password = test_input($_POST['retype_password']);
}


if ($username == $n_username) {

    $pw_query = "SELECT password FROM userauthentication WHERE username='" . $username . "'";

    if ($is_pw_query_run = mysqli_query($connection, $pw_query)) {

        while ($row = mysqli_fetch_array($is_pw_query_run, MYSQLI_ASSOC)) {
            if (md5($old_password) == $row['password']) {
                if ($old_password == $new_password) {
                    echo "<script>alert('Your new password is already being used')</script>";
                } else {
                    if ($new_password == $c_password) {
                        $new_password = md5($new_password);
                        $pw_change = "UPDATE userauthentication SET password= '" . $new_password . "' WHERE username='" . $username . "'";

                        mysqli_autocommit($connection, FALSE);
                        mysqli_query($connection, $pw_change);
                        mysqli_commit($connection);
                        echo "<script>alert('Password Changed Successfully')</script>";
                        echo "<script> window.history.go(-2);</script>";
                    } else {
                        echo "<script>alert('Password Mismatch')</script>";
                        echo "<script> window.history.go(-1);</script>";
                    }
                }
            } else {
                echo "<script>alert('Entered current Password is invalid')</script>";
                echo "<script> window.history.go(-1);</script>";
            }

        }
    }

} else {
    echo "<script>alert('Invalid Username')</script>";

}