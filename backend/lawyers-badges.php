<?php include 'connection.php';


$username = $_SESSION['username'];

$load_query = "SELECT * FROM badge 
    NATURAL JOIN lawyerbadge   WHERE username = '" . $username . "'";

$badge_q = mysqli_query($connection, $load_query);
$badges = mysqli_fetch_array($badge_q, MYSQLI_ASSOC);






