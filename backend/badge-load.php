<?php
$connection = new mysqli("localhost", "root", "", "lawzia");
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();
$username = $_SESSION['username'];

function countPoints(){
    global  $connection;
    global $username;

    $pointCount_query =mysqli_query( "SELECT points FROM lawyer WHERE username='".$username."'");
    $pointCount=mysqli_fetch_array($connection,$pointCount_query);
    $points= $pointCount['points'];



}