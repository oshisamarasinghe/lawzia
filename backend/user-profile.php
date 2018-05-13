<?php include 'connection.php';

session_start();

$username = $_SESSION['username'];

$user_details = "SELECT * FROM generaluser WHERE username='".$username."'";
if ($is_query_run = mysqli_query($connection, $user_details)) {
    while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
        $country = $row['country'];
        $email = $row['email'];
    }
}


$no_of_ques=mysqli_query($connection,"SELECT count(qID) as queCount FROM question WHERE qUser='".$username."'");
$data=mysqli_fetch_assoc($no_of_ques);