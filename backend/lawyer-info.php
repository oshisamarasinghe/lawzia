<?php include 'connection.php';
session_start();

$username = $_SESSION['username'];

$lawyer_details = "SELECT * FROM lawyer WHERE username='" . $username . "'";
if ($is_lawyer_details_query_run = mysqli_query($connection, $lawyer_details)) {
    while ($row = mysqli_fetch_array($is_lawyer_details_query_run, MYSQL_ASSOC)) {
        $title = $row['title'];
        $fName = $row['fName'];
        $lName = $row['lName'];
        $country = $row['country'];
        $email = $row['email'];
        $contact = $row['contact'];
        $position = $row['workPosition'];
        $company = $row['workCompany'];
        $experience = $row['workExperience'];
        $wEmail = $row['workEmail'];
        $wContact = $row['workContact'];
        $street = $row['workAddStreet'];
        $city=$row['workAddCity'];
        $wCountry=$row['WorkAddCountry'];
        $points=$row['points'];

    }
}