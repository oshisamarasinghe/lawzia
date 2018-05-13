<?php
$connection = new mysqli("localhost", "root", "", "lawzia");
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();
$username = $_SESSION['username'];


if (isset($_POST['liked'])) {
    $answerId = $_POST['postid'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='" . $answerId . "'");
    $row = mysqli_fetch_array($result);
    $nUp =(int)($row['voteUpCount'])+1 ;

    $nDown=(int)$row['voteDownCount'];
    $law_query = mysqli_query($connection, "SELECT aUser FROM answer WHERE aID='" . $answerId . "'");
    $law = mysqli_fetch_array($law_query);
    $lawyer_name=$law['aUser'];

    $point_query=mysqli_query($connection,"SELECT points FROM lawyer  WHERE username='".$lawyer_name."'");
    $point_result=mysqli_fetch_array($point_query);

    $points=(int)$point_result['points']+1;



    try{

        mysqli_autocommit($connection, FALSE);
        mysqli_query($connection,"UPDATE lawyer SET points='$points' WHERE username='".$lawyer_name."'");
        mysqli_query($connection, "INSERT INTO likes(username,aID) VALUES ('$username','$answerId')");
        mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' WHERE aID ='" . $answerId . "'");
        mysqli_commit($connection);
    }catch(Exception $e ){
        $connection->rollback();

    }
    $ratings=array();

    $ratings=[
        "likes" => $nUp,
        "unlikes"=> $nDown

    ];

    echo json_encode($ratings);


}

if (isset($_POST['unLiked'])) {
    $answerId = $_POST['postid'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='" . $answerId . "'");
    $row = mysqli_fetch_array($result);
    $nDown = (int)$row['voteDownCount'] + 1;
    $nUp=(int)$row['voteUpCount'];

    $law_query = mysqli_query($connection, "SELECT aUser FROM answer WHERE aID='" . $answerId . "'");
    $law = mysqli_fetch_array($law_query);
    $lawyer_name=$law['aUser'];

    $point_query=mysqli_query($connection,"SELECT points FROM lawyer  WHERE username='".$lawyer_name."'");
    $point_result=mysqli_fetch_array($point_query);

    $points=(int)$point_result['points']-1;

    try{
        mysqli_autocommit($connection,FALSE);
        mysqli_query($connection,"UPDATE lawyer SET points='$points' WHERE username='".$lawyer_name."'");
        mysqli_query($connection, "INSERT INTO unlikes(username,aID) VALUES ('$username','$answerId')");
        mysqli_query($connection, "UPDATE answervote SET voteDownCount='$nDown' WHERE aID ='" . $answerId . "'");
        mysqli_commit($connection);
    }catch(Exception $e){
        $connection->rollback();
    }
    $ratings=array();

    $ratings=[
        "likes" => $nUp,
        "unlikes"=> $nDown

    ];

    echo json_encode($ratings);



    exit();
}
if (isset($_POST['like_unlike'])) {
    $answerId = $_POST['postID'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='" . $answerId . "'");
    $row = mysqli_fetch_array($result);
    $nUp = $row['voteUpCount'] - 1;
    $nDown = $row['voteDownCount'] + 1;

    $law_query = mysqli_query($connection, "SELECT aUser FROM answer WHERE aID='" . $answerId . "'");
    $law = mysqli_fetch_array($law_query);
    $lawyer_name=$law['aUser'];

    $point_query=mysqli_query($connection,"SELECT points FROM lawyer  WHERE username='".$lawyer_name."'");
    $point_result=mysqli_fetch_array($point_query);

    $points=(int)$point_result['points']-2;

    try{
        mysqli_autocommit($connection,FALSE);
        mysqli_query($connection,"UPDATE lawyer SET points='$points' WHERE username='".$lawyer_name."'");
        mysqli_query($connection, "DELETE FROM  likes WHERE username='" . $username . "'AND aID='" . $answerId . "' ");
        mysqli_query($connection, "INSERT INTO unlikes(username,aID) VALUES ('$username','$answerId')");
        mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' ,voteDownCount='$nDown' WHERE aID ='" . $answerId . "'");
        mysqli_commit($connection);
    }catch(Exception $e){
    $connection->rollback();
    }
    $ratings=array();

    $ratings=[
        "likes" => $nUp,
        "unlikes"=> $nDown

    ];

    echo json_encode($ratings);


    exit();
}

if (isset($_POST['unlike_like'])) {
    $answerId = $_POST['postID'];
    $result = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='" . $answerId . "'");
    $row = mysqli_fetch_array($result);
    $nDown = $row['voteDownCount'] - 1;
    $nUp = $row['voteUpCount'] + 1;

    $law_query = mysqli_query($connection, "SELECT aUser FROM answer WHERE aID='" . $answerId . "'");
    $law = mysqli_fetch_array($law_query);
    $lawyer_name=$law['aUser'];

    $point_query=mysqli_query($connection,"SELECT points FROM lawyer  WHERE username='".$lawyer_name."'");
    $point_result=mysqli_fetch_array($point_query);

    $points=(int)$point_result['points']+2;
    try{
        mysqli_autocommit($connection,FALSE);
        mysqli_query($connection,"UPDATE lawyer SET points='$points' WHERE username='".$lawyer_name."'");
        mysqli_query($connection, "DELETE FROM  unlikes WHERE username='" . $username . "'AND aID='" . $answerId . "' ");
        mysqli_query($connection, "INSERT INTO likes(username,aID) VALUES ('$username','$answerId')");
        mysqli_query($connection, "UPDATE answervote SET voteUpCount='$nUp' ,voteDownCount='$nDown' WHERE aID ='" . $answerId . "'");
        mysqli_commit($connection);
    }catch(Exception $e){
    $connection->rollback();
    }
    $ratings=array();

    $ratings=[
        "likes" => $nUp,
        "unlikes"=> $nDown

    ];

    echo json_encode($ratings);



    exit();
}

//Get total number of likes for a particular post
function getLikes($id)
{
    global $connection;
    $aid=$id;

    $rs = mysqli_query($connection, "SELECT voteUpCount FROM answervote
  		  WHERE aID =$aid " );
    $result = mysqli_fetch_array($rs);

    return $result['voteUpCount'];
}


// Get total number of unlikes for a particular post
function getUnLikes($id)
{
    global $connection;
    $sql = "SELECT voteDownCount FROM answervote
  		  WHERE aID = $id  ";
    $rs = mysqli_query($connection, $sql);
    $result = mysqli_fetch_array($rs);
    return $result['voteDownCount'];
}

function getRatings($id)
{
  global  $connection;


    $unlike_query = mysqli_query($connection, "SELECT voteUpCount FROM answervote
  		  WHERE aID = $id ");

    $like_query = mysqli_query($connection, "SELECT voteDownCount FROM answervote
  		  WHERE aID = $id ");

    $totLikes = mysqli_fetch_array($like_query);
    $totUnlikes = mysqli_fetch_array($unlike_query);

    $like=$totLikes[0];
    $unlike=$totUnlikes[0];

    $ratings=[
            'likes' => $like,
            'unlikes'=>$unlike

    ];

    return json_encode($ratings);

}
/*
Check if user already likes post or not
function userLiked($answer_id)
{
    global $connection;
    global $username;
    $sql = "SELECT * FROM likes WHERE username=$username
  		  AND aID=$answer_id";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    }else{
        return false;
    }
}

// Check if user already likes post or not
function userUnLiked($answer_id)
{
    global $connection;
    global $username;
    $sql = "SELECT * FROM unlikes WHERE username=$username
  		  AND aID=$answer_id";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        return true;
    }else{
        return false;
    }
}*/
