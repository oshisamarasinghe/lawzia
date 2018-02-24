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
    <!-- Custome CSS-->
    <link href="../../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="../../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="../../js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="white">

<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/nav-lawyer.php';?>


<!--question-->
<?php include '../../backend/connection.php';
$questionID=$_GET['question_id'];
echo $questionID;

$question = "SELECT * FROM question WHERE qID='$questionID'";

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
        echo '<div class="row">
                 <div class="col s12 m12 l12 " >
                     <ul class="collection">
                         <li class="collection-item avatar">
                            <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
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
                    <div class="row">
                        <div class="col s12">
                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                    <tr>
                    <th>Answer</th>
                    <th>Answered by</th>
                    <th>Answered on</th>
                    </tr>
                    
                    </thead>
                 <tbody>
                 ';

            while ($in_row = mysqli_fetch_array($is_inside_query_run, MYSQL_ASSOC)) {
                $aDescription = $in_row['aDescription'];
                $aDate = $in_row['aDate'];
                $aUser = $in_row['aUser'];
                $aId = $in_row['aID'];
                echo '
                         <tr>
                            <td>' . $aDescription . '</td>
                            <td >' . $aUser . '</td>
                            <td>' . $aDate . '</td>
                          </tr>
                           
                           
                ';
            }
            echo ' </tbody>
                </table>
                </div>
                </div>';


}


?>

<!-- insert footer-->
<?php include '../header-footer/footer.php';
?>

<!-- jQuery Library -->
<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- data-tables -->
<script type="text/javascript" src="../../js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<!--script type="text/javascript" src="../js/plugins/data-tables/data-tables-script.js"></script-->
<script type="text/javascript" src="../../js/plugins.js"></script>


</body>
</html>