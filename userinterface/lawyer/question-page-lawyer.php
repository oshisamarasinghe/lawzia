<?php include '../../backend/connection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question Page | LAWZIA</title>

    <link rel="icon" href="../../images/lawzia-logo.jpg" sizes="32x32">

    <!-- CORE CSS-->
    <link rel="stylesheet" href="../../INDEX/assets/css/navmenu/styles.css">

    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custom CSS-->
    <link href="../../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="../../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="../../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet"
          media="screen,projection">
</head>

<body class="white">

<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/nav-lawyer.php'; ?>


<!--question-->
<?php include '../../backend/connection.php';
$questionID = $_GET['question_id'];

$question = "SELECT * FROM question WHERE qID='$questionID'";

if ($is_query_run = mysqli_query($connection, $question)) {

    while ($qData = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $description = $qData['qDescription'];
        $date = $qData['qDate'];
        $user = $qData['qUser'];
        $qId = $qData['qID'];
        $country = $qData['qCountry'];
        $cat = $qData['qCategory'];
        $title = $qData['qTitle'];

        //relevant user profile image
        $relevant_Lawyer_image = "SELECT Image FROM userimage WHERE username='" . $user . "' ";
        if ($is_query_run = mysqli_query($connection, $relevant_Lawyer_image)) {
            while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
                $data = $row['Image'];

            }
        }

        if (empty($data)) {
            echo '<div class="row">
                 <div class="col s12 m12 l12  " >
                     <ul class="collection grey lighten-2">
                         <li class="collection-item avatar grey lighten-2">
                            <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title black-text">' . $user . '</span>
                                
                                <p class=" ultra-small">'.$cat.' - '. $country . '</p>
                                <p class="ultra-small black-text" >' . $date . ' </p>
                               </div>
                             </li>
                          </ul>
                      </div>
                                <div class="model-email-content grey lighten-3">
                                
                                <h5 class="teal-text darken-3">Question : ' . $title . '</h5>
                                <p> ' . $description . '</p>
                                </div>
                        
               </div>';
        } else {

            echo '<div class="row">
                 <div class="col s12 m12 l12  " >
                     <ul class="collection grey lighten-2">
                         <li class="collection-item avatar grey lighten-2">
                            <div class="col s7">
                                <img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                 id="profileImage">
                                <span class="title black-text">' . $user . '</span>
                                
                                <p class=" ultra-small">'.$cat.' - '. $country . '</p>
                                <p class="ultra-small black-text" >' . $date . ' </p>
                             </div>
                           </li>
                         </ul>
                       </div>
                                <div class="model-email-content grey lighten-3">
                               
                                <h5 class="teal-text darken-3">Question : '.$title.'</h5>
                                <p> ' . $description . '</p>
                                </div>
                         
               </div>';
        }

    }
}


$answers = "SELECT * FROM answer NATURAL JOIN qa WHERE qID='$questionID'";
if ($is_inside_query_run = mysqli_query($connection, $answers)) {


    while ($in_row = mysqli_fetch_array($is_inside_query_run, MYSQL_ASSOC)) {
        $aDescription = $in_row['aDescription'];
        $aDate = $in_row['aDate'];
        $aUser = $in_row['aUser'];
        $aId = $in_row['aID'];

        //relevant lawyer profile image
        $relevant_Lawyer_image = "SELECT Image FROM userimage WHERE username='" . $aUser . "' ";
        if ($is_query_run = mysqli_query($connection, $relevant_Lawyer_image)) {
            while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
                $data = $row['Image'];

            }
        }
        if (empty($data)) {
            echo '<div class="row">
                    <div class="col s12 m12 l12 " >
                     <ul class="collection teal lighten-4">
                        <li class="collection-item avatar teal lighten-4">
                            <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title black-text">' . $aUser . '</span>
                                <p class=" ultra-small">Answered on ' . $aDate . ' </p>
                              </div>
                            </li>
                         </ul>
                      </div>
                                
                                <div class="model-email-content teal lighten-5">
                                <p class="small"> ' . $aDescription . '</p>
                                
                            </div>
                        
                   </div>
                ';
        } else {
            echo '<div class="row">
                    <div class="col s12 m12 l12 " >
                     <ul class="collection teal lighten-4">
                        <li class="collection-item avatar teal lighten-4">
                        
                            <div class="col s7">
                                <img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                 id="profileImage">
                                <span class="title black-text">' . $aUser . '</span>
                                <p class=" ultra-small">Answered on ' . $aDate . ' </p>
                                
                               </div>
                             </li>
                           </ul>
                         </div>
                                <div class="model-email-content teal lighten-5">
                                <p class="small"> ' . $aDescription . '</p>
                                <a href="" class=" teal-text darken-3"><i class="mdi-action-thumb-up"></i> </a>
                                <a class=" teal-text darken-3"><i class="mdi-action-thumb-down"></i> </a>
                            </div>
                        
                     </div>
                ';
        }
    }

}

?>

<!-- insert footer-->
<!--?php include '../header-footer/footer.php';
?>

<!-- jQuery Library -->
<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="../../js/plugins.js"></script>


</body>
</html>