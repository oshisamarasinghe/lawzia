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


if (empty(test_input($_POST['title']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
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
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else if (ctype_alpha(test_input($_POST['lname'])) == false) {
    $errors = "Invalid last Name";
    echo "<script> alert('Invalid last Name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $lname = test_input($_POST['lname']);
}

/*if (empty(test_input($_POST['CountryCode']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {*/
    $countryCode = test_input($_POST['CountryCode']);


if (empty(test_input($_POST['contact']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {


// set API Access Key
    $access_key = 'd904bc71477177d932f63f655a8cde9a';

// set phone number
    $phone_number = test_input($_POST['contact']);

    $country_code=$countryCode;

// Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/validate?access_key='.$access_key.'&number='.$phone_number.'& country_code ='.$country_code.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

// Decode JSON response:
    $validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
    if($validationResult['valid']=='true'){
        $contact = test_input($_POST['contact']);
    }else{
        echo "<script> alert('Invalid contact number')</script>";
    }
    //$validationResult['country_code'];
    //$validationResult['carrier'];


    //$contact = test_input($_POST['contact']);
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
if (empty(test_input($_POST['username']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $username = test_input($_POST['username']);
}

if (empty(test_input($_POST['password']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $password_text = test_input($_POST['password']);
    $password = md5($password_text);
}

if (empty(test_input($_POST['w_email']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $checkWemail = test_input($_POST['w_email']);
    if (!filter_var($checkWemail, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Invalid company email ')</script>";
    } else {
        $wEmail = test_input($_POST['w_email']);
    }
}
if (empty(test_input($_POST['w_street']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work street address')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wStreet = test_input($_POST['w_street']);
}

if (empty(test_input($_POST['w_city']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete work city address')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wCity = test_input($_POST['w_city']);
}

if (test_input(empty($_POST['w_country']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wCountry = test_input($_POST['w_country']);
}

if (empty(test_input($_POST['w_name']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company name')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wName = test_input($_POST['w_name']);
}
/*if (empty(test_input($_POST['w_CountryCode']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-work tel number')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {*/
    $wCountryCode = test_input($_POST['w_CountryCode']);


if (empty(test_input($_POST['w_tel']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {


// set API Access Key
    $access_key = 'd904bc71477177d932f63f655a8cde9a';

// set phone number
    $phone_number = test_input($_POST['w_tel']);

    $w_country_code = $wCountryCode;

// Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/validate?access_key=' . $access_key . '&number=' . $phone_number . '&country_code=' . $w_country_code . '');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

// Decode JSON response:
    $validationResult = json_decode($json, true);

// Access and use your preferred validation result objects
    if ($validationResult['valid'] == 'true') {
        $wContact = test_input($_POST['w_tel']);
    } else {
        echo "<script> alert('Invalid contact number')</script>";
    }
}

/*if (empty(test_input($_POST['w_tel']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete company contact')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $wContact = test_input($_POST['w_tel']);
}

*/
if (test_input(empty($_POST['exp']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $exp = test_input($_POST['exp']);
}


if (test_input(empty($_POST['w_position']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
} else {
    $position = test_input($_POST['w_position']);
}

$type = 'lu';


try {
    mysqli_autocommit($connection, FALSE);
    mysqli_query($connection, "INSERT INTO userauthentication(username, password,usertype )VALUES('$username','$password','$type')");
    mysqli_query($connection, "INSERT INTO lawyer(username, email, country, fName, lName, contact, title, workPosition, workCompany, workExperience, workAddStreet,
workAddCity, workAddCountry, workEmail, workContact)
				VALUES('$username','$email','$country','$fname','$lname','$contact','$title','$position','$wName','$exp','$wStreet','$wCity',
				'$wCountry','$wEmail','$wContact')");
    //mysqli_query($connection, "INSERT INTO lawyerbadge(bID,username)VALUES('first','$username')");
    mysqli_commit($connection);
    session_start();
    $_SESSION['username'] = $username;
    header("location: ../userinterface/lawyer/lawyer-selecting-practiseAreas.php");

} catch (Exception $e) {
    $connection->rollback();
}
