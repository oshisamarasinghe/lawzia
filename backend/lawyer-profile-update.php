<?php include 'connection.php';
session_start();
/**
 * Created by PhpStorm.
 * User: oshadi
 * Date: 2/7/2018
 * Time: 12:41 PM
 */


$username =$_SESSION['username'];

$lawyer_details="SELECT * FROM lawyer WHERE username='".$username."'";
if ($is_query_run=mysqli_query($connection ,$lawyer_details)){
    while($row=mysqli_fetch_array($is_query_run,MYSQL_ASSOC)) {
        $title=$row['title'];
        $fName=$row['fName'];
        $lName=$row['lName'];
        $country=$row['country'];
        $email=$row['email'];
        $contact=$row['contact'];
    }
}