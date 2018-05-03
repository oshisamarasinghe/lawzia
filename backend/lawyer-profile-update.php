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
    }
}

$lawyer_work_details = "SELECT * FROM lawyerworkprofile WHERE username='" . $username . "'";
if ($is_lawyer_work_details_query_run = mysqli_query($connection, $lawyer_work_details)) {
    while ($data = mysqli_fetch_array($is_lawyer_work_details_query_run, MYSQL_ASSOC)) {
        $position = $data['workPosition'];
        $company = $data['workCompany'];
        $experience = $data['workExperience'];
        $w_email = $data['workEmail'];
        $w_contact = $data['workContact'];
        $street = $data['workAddStreet'];
        $city=$data['workAddCity'];
        $w_country=$data['WorkAddCountry'];
        $summary=$data['workSummary'];
    }
}