<?php include '../../backend/connection.php';
session_start();
$username = $_SESSION['username'];
function length($inputTxt, $length)
{
    $userInput = $inputTxt;
    if (strlen($userInput) == $length) {
        return true;
    } else {
        return false;
    }
}

//validate data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors = "";
if (empty(test_input($_POST['country']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";
} else {
    $qCountry = test_input($_POST['country']);
}

if (empty(test_input($_POST['category']))) {
    $errors = "error-complete all fields";
    echo "<script> alert('error-complete all fields')</script>";

} else {
    $qCategory = test_input($_POST['category']);
}
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
<div class="tabs tab-profile z-depth-1 red">
    <div class="col s12 offset-m10">
        <p class="white-text waves-effect waves-light">  <?=$qCountry?>/<?=$qCategory?></p>
    </div>
</div>
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
if($qCategory=="All"){
    $questions = "SELECT * FROM question WHERE qCountry='".$qCountry." 'ORDER BY qID DESC ";
}else{
    $questions = "SELECT * FROM question WHERE qCountry='".$qCountry." ' AND qCategory='".$qCategory."'ORDER BY qID DESC ";
}



    if ($is_query_run = mysqli_query($connection, $questions)) {

        while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
            $description = $row['qDescription'];
            $date = $row['qDate'];
            $user = $row['qUser'];
            $qId = $row['qID'];
            $cat = $row['qCategory'];
            $country = $row['qCountry'];
            $title=$row['qTitle'];

            echo '<div class="row">
                        <div class="col s12 m12 l12 " >
                            <ul class="collection grey lighten-2">
                                <li class="collection-item avatar grey lighten-2">
                                    <div class="col s7">
                                <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                <span class="title black-text">' . $user . '</span>
                                <p class=" ultra-small">' . $country . '</p>
                                <p class="ultra-small"> ' . $date . ' </p>
                                <div class="model-email-content">
                                <h5 class="cyan-text ">'.$title.'</h5>
                               
                                <p>' . $description . '</p>
                                </div>
                           
                            <p><a href="view-answers.php?question_id=' . $qId . '" class="secondary-content cyan-text">view answers</a> </p>
                          </li>
                          </ul>
                           </div>
                     </div>
                           
                     ';

        }

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

