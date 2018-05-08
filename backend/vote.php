<?php include'connection.php';
$username=$_SESSION['username'];

if (isset($_POST['liked'])) {
    $answerId = $_POST['postid'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID=$answerId");
    $row = mysqli_fetch_array($result);
    $n = $row['voteUpCount'];

    mysqli_query($connection, "INSERT INTO likes (username, aID) VALUES ($username, $answerId)");
    mysqli_query($connection, "UPDATE answervote SET voteUpCount=$n+1 WHERE id=$answerId");

    echo $n+1;
    exit();
}