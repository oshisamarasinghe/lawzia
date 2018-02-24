<?php include '../backend/connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question Page | LAWZIA</title>

    <link rel="icon" href="../images/lawzia-logo.jpg" sizes="32x32">

    <!-- CORE CSS-->
    <link rel="stylesheet" href="../INDEX/assets/css/navmenu/styles.css">

    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="../js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="white">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->
<!-- START HEADER -->
<header id="header" class="page-topbar">
    <nav class="indigo hide-on-med-and-down">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <a href="" class="white-text" >
                        Home
                    </a>
                </li>
                <li >
                    <a href="lawyer/lawyer-first-profile.php" class="white-text">
                        Profile
                    </a>
                </li>
                <li class="active">
                    <a class="white-text" href="QA-lawyer.php">
                        <span>Question & Answer</span>
                    </a>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i
                            class="mdi-action-settings-overscan"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER -->

<!--question-->
<?php include '../backend/connection.php';
$questionID=$_GET['question_id'];
echo $questionID;

$question = "SELECT * FROM question WHERE qID='.$questionID.'";

if ($is_query_run = mysqli_query($connection, $question)) {
    echo $questionID;
    while ($qData = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $description = $qData['qDescription'];
        $date = $qData['qDate'];
        $user = $qData['qUser'];
        $qId = $qData['qID'];
        $country = $qData['qCountry'];
        $cat = $qData['qCategory'];
        echo $questionID;
        echo'<div class="row">
                 <div class="col s12 m12 l12 " >
                     <ul class="collection">
                         <li class="collection-item avatar">
                            <div class="col s7">
                                <img src="../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title green-text">' . $user . '</span>
                                <p class=" ultra-small">' . $country . '-' . $date . ' </p>
                                <p> ' . $description . '</p>
                            </div>
                        </li>
                     </ul>
                  </div>
               </div>';
    }
}

$answers = "SELECT * FROM answer NATURAL JOIN qa WHERE  qID='$questionID'";
if ($is_inside_query_run = mysqli_query($connection, $answers)) {
    echo '<div id="table-datatables">
              <h5 class="header">Answers</h5>
              <div class="row">
                <div class="col s12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                 <tbody>
                   



                        <ul class="collection item">
                         <div>
                          <a class="collection-item active">Answers</a>
                         </div>
                         
            ';

    while ($in_row = mysqli_fetch_array($is_inside_query_run, MYSQL_ASSOC)) {
        $aDescription = $in_row['aDescription'];
        $aDate = $in_row['aDate'];
        $aUser = $in_row['aUser'];
        $aId = $in_row['aID'];
        echo '
                         <tr>
                            <td>Name</td>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    <li class="collection-item avatar">
                    <img src="../images/user-profile-pic.png" alt="" class="circle">
                    <span class="title green-text">' . $aUser . '</span>
                    <p class="secondary-content ultra-small">answered -' . $aDate . '</p>
                    <p> ' . $aDescription . '
                    </p>
                 </li>
                ';
    }
    echo ' </ul>';


}


?>


<!--FOOTER-->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <span>Copyright © 2018 <a class="grey-text text-lighten-4"
                                      target="_blank">osh</a> All rights reserved.</span>
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4">osh</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="../js/plugins.js"></script>


</body>
</html>


echo'  <div id="table-datatables">
    <div class="row">
        <div class="col s12">
            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                <tbody>
                <tr>
                    <td>' . $fName. '+'.$lName.'</td>
                    <td >' . $email . '</td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
'