<?php session_start(); ?>

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

</head>

<body class="white">

<!-- Page Loading -->
<?php
include '../header-footer/nav-lawyer.php';
?>


<?php include '../../backend/connection.php';
$qId = $_GET['question_id'];
$questions = "SELECT * FROM question WHERE qID='$qId'";


if ($is_query_run = mysqli_query($connection, $questions)) {

    while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
        $description = $row['qDescription'];
        $date = $row['qDate'];
        $user = $row['qUser'];
        $qId = $row['qID'];
        $country = $row['qCountry'];
        $cat = $row['qCategory'];
        $title = $row['qTitle'];

        //relevant user profile image
        $relevant_Lawyer_image = "SELECT Image FROM userimage WHERE username='" . $user . "' ";
        if ($is_query_run = mysqli_query($connection, $relevant_Lawyer_image)) {
            while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
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
                                
                                <p class=" ultra-small">' . $cat . ' - ' . $country . ' </p>
                                <p class="ultra-small">' . $date . '</p>
                              
                               </div>
                               </li>
                               </ul>
                            </div>
                                
                                <div class="model-email-content grey lighten-3">
                                    <h5 class=" teal-text darken-3">Question : ' . $title . '</h5>
                                   
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
                                
                                <p class=" ultra-small">' . $cat . ' - ' . $country . ' </p>
                                <p class="ultra-small">' . $date . '</p>
                              
                               </div>
                               </li>
                               </ul>
                            </div>
                                
                                <div class="model-email-content grey lighten-3">
                                <h5 class=" teal-text darken-3">Question : ' . $title . '</h5>
                               
                                <p> ' . $description . '</p>
                                </div>
                         
               </div>';

        }

        echo '
               
                    <div class="col s12 " >
                        <div class="card-panel z-depth-2 ">
                            <form  action="../../backend/addAnswer.php" method="post" >
                            
                                
                                     <div class="row">
                                        <div class="input-field col s12">
                                             <textarea id="message5" class= "materialize-textarea white" length="1000" rows="10" name="answer" ></textarea>
                                            <input type="hidden" name="question_id" value="' . $qId . '">
                                            <label for="answer">Type Your Answer Here</label>
                                        </div>
                                        <button class="btn cyan waves-effect waves-light left" type="submit" name="submitAnswer">Post Your answer
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                </div>
                            
                            </form>
                    
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

