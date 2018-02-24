<?php include "connection.php";
session_start();



$username=$_SESSION['username'];

function length($inputTxt,$length)
{
    $userInput = $inputTxt;
    if(strlen($userInput) == $length )
    {
        return true;
    }
    else
    {
        return false;
    }
}
//validate data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors="";

if(empty(test_input($_POST['answer']))){
    $errors="error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
    echo "<script> window.history.go(-1);</script>";
}else{
    $answer=test_input($_POST['answer']);
}
$qId=$_POST['question_id'];


$query="INSERT INTO answer(aDescription,aUser,aDate)VALUES('$answer','$username',now())";

try {

    mysqli_autocommit($connection, FALSE);
    mysqli_query($connection, $query);
    mysqli_commit($connection);



}catch (Exception $e) {
    $connection->rollback();
}
try{
    $answer_id="SELECT aID FROM answer ORDER BY aID DESC LIMIT 1";
    if ($is_query_run=mysqli_query($connection ,$answer_id)){
        while($row=mysqli_fetch_array($is_query_run,MYSQL_ASSOC)) {
            $answerId=$row['aID'];

        }
    }
    mysqli_autocommit($connection,false);
    mysqli_query($connection,"INSERT INTO qa(qID,aID)VALUES('$qId','$answerId')");
    mysqli_commit($connection);
    echo '<script>alert("your answer submitted successfully")</script>';
    echo "<script> window.history.go(-2);</script>";


}catch (Exception $e) {
    $connection->rollback();
}







