<?php include  'connection.php';
/**
 * Created by PhpStorm.
 * User: oshadi
 * Date: 2/14/2018
 * Time: 10:36 AM
 */
session_start();

$username =$_SESSION['username'];

$user_details="SELECT * FROM generaluser WHERE username='".$username."'";
if ($is_query_run=mysqli_query($connection ,$user_details)){
    while($row=mysqli_fetch_array($is_query_run,MYSQL_ASSOC)) {
        $country=$row['country'];
        $email=$row['email'];
    }
}