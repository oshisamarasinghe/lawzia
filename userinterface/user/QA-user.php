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

    <link href="../../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">

</head>

<body class="white">
<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/header-user.php'; ?>
    <form method="post" action="ask-a-question.php">
        <div class="row">
            <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                    Ask new Question
                    <i class="mdi-content-send right"></i>
                </button>
            </div>
        </div>
    </form>


<!--question-->
<?php include '../../backend/connection.php';
    $questions = "SELECT * FROM question ORDER BY qID DESC ";


    if ($is_query_run = mysqli_query($connection, $questions)) {
        echo '
        
                    
                    <div class="row">
                        <div class="col s12 m12 l12 " >
                            <ul class="collection">
        ';
        while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
            $description = $row['qDescription'];
            $date = $row['qDate'];
            $user = $row['qUser'];
            $qId = $row['qID'];
            $cat = $row['qCategory'];
            $country = $row['qCountry'];

            echo '
                     <li class="collection-item avatar">
                             <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title green-text">' . $user . '</span>
                                <p class=" secondary-content ultra-small">' . $country . '-' . $date . ' </p>
                                <p> ' . $description . '
                             </div>
                            </p>
                            <p><a href="view-answers.php?question_id=' . $qId . '">view answers</a> </p>
                          </li>
                           
                     ';

        }
        echo '
                        </ul>
                           </div>
                     </div>';
    }


?>


<!--FOOTER-->
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

