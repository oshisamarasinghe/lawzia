'<?php include'../../backend/connection.php';
session_start();
$username=$_SESSION['username'];


if (isset($_POST['liked'])) {
    $answerId = $_POST['postid'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='".$answerId."'");
    $row = mysqli_fetch_array($result);
    $nUp = $row['voteUpCount']+1;


    mysqli_query($connection, "INSERT INTO likes(username,aID) VALUES ('$username','$answerId')");
    mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' WHERE aID ='".$answerId."'");


    exit();
}

if (isset($_POST['unLiked'])) {
    $answerId = $_POST['postid'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='".$answerId."'");
    $row = mysqli_fetch_array($result);
    $nDown = $row['voteDownCount']+1;


    mysqli_query($connection, "INSERT INTO unlikes(username,aID) VALUES ('$username','$answerId')");
    mysqli_query($connection, "UPDATE answervote SET voteDownCount='$nDown' WHERE aID ='".$answerId."'");


    exit();
}
if (isset($_POST['like_unlike'])) {
    $answerId = $_POST['postID'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='".$answerId."'");
    $row = mysqli_fetch_array($result);
    $nUp = $row['voteUpCount']-1;
    $nDown=$row['voteDownCount']+1;



    mysqli_query($connection, "DELETE FROM  likes WHERE username='".$username."'AND aID='".$answerId."' ");
    mysqli_query($connection, "INSERT INTO unlikes(username,aID) VALUES ('$username','$answerId')");
    mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' ,voteDownCount='$nDown' WHERE aID ='".$answerId."'");


    exit();
}

if (isset($_POST['unlike_like'])) {
    $answerId = $_POST['postID'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='".$answerId."'");
    $row = mysqli_fetch_array($result);
    $nDown = $row['voteDownCount']-1;
    $nUp = $row['voteUpCount']+1;

    mysqli_query($connection, "DELETE FROM  unlikes WHERE username='".$username."'AND aID='".$answerId."' ");
    mysqli_query($connection, "INSERT INTO likes(username,aID) VALUES ('$username','$answerId')");
    mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' ,voteDownCount='$nDown' WHERE aID ='".$answerId."'");


    exit();
}