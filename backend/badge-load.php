<?php
$connection = new mysqli("localhost", "root", "", "lawzia");
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

getPoints();


function getPoints()
{
    global $connection;
    global $username;
    $pointCount_query = mysqli_query($connection, "SELECT * FROM lawyer WHERE username='" . $username . "'");
    $pointCount = mysqli_fetch_array($pointCount_query);
    $points = (int)$pointCount['points'];

    addBadges($points);

}

function addBadges($user_points)
{
    global $connection;
    global $username;

    $badge_array = array();

    $lawyers_badges = mysqli_query($connection, "SELECT bID FROM lawyerbadge WHERE username='" . $username . "'");
    while ($row = mysqli_fetch_assoc($lawyers_badges)) {
        array_push($badge_array, $row['bID']);
    }

    /* foreach( $badge_array  as $value){
         echo $value.'<br />';

     }*/
    if ($user_points >= 500) {

        if ((!in_array('5fifth', $badge_array))) {
            $newBadge = '5fifth';
        }
    } elseif ($user_points >= 100) {
        if ((!in_array('4fourth', $badge_array))) {
            $newBadge = '4fourth';
        }
    } elseif ($user_points >=50) {
        if ((!in_array('3third', $badge_array))) {
            $newBadge = '3third';
        }
    }elseif ($user_points > 9) {
            if ((!in_array('2second', $badge_array))) {
                $newBadge = '2second';
            }
        }

    if (!empty($newBadge)) {
        //echo $newBadge;

        mysqli_query($connection, "INSERT INTO lawyerbadge(bID,username)VALUES('$newBadge','$username')");


    }
}


