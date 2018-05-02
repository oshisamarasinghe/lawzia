<?php
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
    <!-- CSS style Horizontal Nav (Layout 03)-->
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
include '../header-footer/nav-lawyer.php';
?>


<?php include '../../backend/connection.php';
$qId = $_GET['question_id'];
$questions = "SELECT * FROM question WHERE qID='$qId'";


if ($is_query_run = mysqli_query($connection, $questions)) {

    while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $description = $row['qDescription'];
        $date = $row['qDate'];
        $user = $row['qUser'];
        $qId = $row['qID'];
        $country = $row['qCountry'];
        $cat=$row['qCategory'];

        echo '<div class="row">
                 <div class="col s12 m12 l12  " >
                     <ul class="collection grey lighten-2">
                         <li class="collection-item avatar grey lighten-2">
                            <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title black-text">' . $user . '</span>
                                
                                <p class=" ultra-small">' . $country . '</p>
                                <p class="ultra-small black-text" >' . $date . ' </p>
                                
                                <div class="model-email-content">
                                <p class="small teal-text darken-3">Category - '.$cat.'</p>
                                <hr class="grey-text text-lighten-2 full-width">
                                <p> ' . $description . '</p>
                                </div>
                            </div>
                        </li>
                     </ul>
                  </div>
               </div>
                <div class="row">
                    <div class="col s12  " >
                        <form  action="../../backend/addAnswer.php" method="post" >
                            <ul class="collection">
                                <div>
                                    <a class="collection-item active cyan">Type your Answer Here</a>
                                </div>
                                <li class="collection-item avatar">
                                    <div class="input-field col s12">
                                         <textarea id="message5" class= "materialize-textarea white" length="1000" rows="10" name="answer" ></textarea>
                                        <input type="hidden" name="question_id" value="' . $qId . '">
                                    </div>
                                    <button class="btn cyan waves-effect waves-light left" type="submit" name="submitAnswer">Post Your answer
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                 </div>
            </div>
          
                    ';
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

<!--custom -->
<script type="text/javascript" src="../../js/custom/addNewElement.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../js/plugins.js"></script>


</body>
</html>

