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
    $badge_list = array();


    $badge_array = array();

    $lawyers_badges = mysqli_query($connection, "SELECT bID FROM lawyerbadge WHERE username='" . $username . "'");
    while ($row = mysqli_fetch_assoc($lawyers_badges)) {
        array_push($badge_array, $row['bID']);
    }

    /* foreach( $badge_array  as $value){
         echo $value.'<br />';

     }*/
    if ($user_points >= 100) {

        if ((!in_array('fourth', $badge_array))) {
            $newBadge = 'fourth';
        }
    } elseif ($user_points > 49) {
        if ((!in_array('third', $badge_array))) {
            $newBadge = 'third';
        }
    } elseif ($user_points > 9) {
        if ((!in_array('second', $badge_array))) {
            $newBadge = 'second';
        }
    }

    if (!empty($newBadge)) {
        //echo $newBadge;

        mysqli_query($connection, "INSERT INTO lawyerbadge(bID,username)VALUES('$newBadge','$username')");


    }
}


