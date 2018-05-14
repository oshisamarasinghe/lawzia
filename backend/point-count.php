<?php include 'connection.php';


$username = $_SESSION['username'];

$pointCount_query = mysqli_query($connection, "SELECT * FROM lawyer WHERE username='" . $username . "'");
$pointCount = mysqli_fetch_array($pointCount_query);
$points = (int)$pointCount['points'];