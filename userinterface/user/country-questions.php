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

<!--question-->
<?php include '../../backend/connection.php';

session_start();
$user_country = $_SESSION['country'];

$results_per_page = 5;
$questions = "SELECT * FROM question WHERE qCountry='" . $user_country . "'ORDER BY qID DESC ";
$result = mysqli_query($connection, $questions);
$no_of_results = mysqli_num_rows($result);
$no_of_pages = ceil($no_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page_no = 1;
} else {
    $page_no = $_GET['page'];
}

$this_page_first_result = ($page_no - 1) * $results_per_page;

$results_in_this_page = "SELECT * FROM question WHERE qCountry='" . $user_country . "'  ORDER BY qID DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;


if ($is_query_run = mysqli_query($connection, $results_in_this_page)) {

    while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
        $description = $row['qDescription'];
        $date = $row['qDate'];
        $user = $row['qUser'];
        $qId = $row['qID'];
        $cat = $row['qCategory'];
        $country = $row['qCountry'];
        $title = $row['qTitle'];

        /*$ans_availability=FALSE;
        //search whether there are answers provided or not
        $ans=mysqli_query($connection,"SELECT * FROM qa WHERE qID='".$qId."'");
        if(mysqli_num_rows($ans)>0){
            $ans_availability=TRUE;
        }*/

        //relevant user profile image
        $relevant_user_image = "SELECT Image FROM userimage WHERE username='" . $user . "' ";
        if ($is_relevant_user_image_query_run = mysqli_query($connection, $relevant_user_image)) {
            while ($in_row = mysqli_fetch_array($is_relevant_user_image_query_run, MYSQLI_ASSOC)) {
                $data = $in_row['Image'];

            }
        }
        if (empty($data)) {
            echo '<div class="row">
                        <div class="col s8 m12 l12 " >
                            <ul class="collection grey lighten-2">
                                <li class="collection-item avatar grey lighten-2">
                                    <div class="col s7">
                                        <img src="../../images/user-profile-pic.png" alt="" class="circle">
                                        <span class="title black-text">' . $user . '</span>
                                        <p class=" ultra-small">' . $country . '</p>
                                        <p class="ultra-small"> ' . $date . ' </p>
                                    </div>
                                </li>
                            </ul>
                         </div>
                         <div class="model-email-content grey lighten-3">
                                <p class="cyan-text ">Question : ' . $title . '</p>
                                <p>' . $description . '</p>
                                <p><a href="view-answers.php?question_id=' . $qId . '" class="secondary-content red-text">view answers</a> </p>
                         </div>
                     </div>
                           
                     ';
        } else {
            echo '<div class="row">
                        <div class="col s8 m12 l12 " >
                            <ul class="collection grey lighten-2">
                                <li class="collection-item avatar grey lighten-2">
                                    <div class="col s7">
                                        <img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                         id="profileImage"/>
                                        <span class="title black-text">' . $user . '</span>
                                        <p class=" ultra-small">' . $country . '</p>
                                        <p class="ultra-small"> ' . $date . ' </p>
                                    </div>
                                </li>
                            </ul>
                          </div>
                          <div class="model-email-content grey lighten-3">
                              <p class="cyan-text ">Question : ' . $title . '</p>
                              <p>' . $description . '</p>
                               <p><a href="view-answers.php?question_id=' . $qId . '" class="secondary-content red-text">view answers</a> </p>
                         </div>
                     </div>
                           
                     ';
        }


    }

}
echo '
  
  <ul class="pagination"> 
    <li class="disabled"><i class="mdi-navigation-chevron-left"></i></li>';
for ($page = 1; $page <= $no_of_pages; $page++) {
    if ($page == $page_no)
        echo '<li><a class="active waves-effect cyan" href="country-questions.php?page=' . $page . '">' . $page . '</a></li>';
    else
        echo '<li><a class="waves-effect " href="country-questions.php?page=' . $page . '">' . $page . '</a></li>';

}
echo '
    <li class="disabled"><i class="mdi-navigation-chevron-right"></i></li>
   </ul>';


?>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large cyan" href="ask-a-question.php">
        <i class="large mdi-content-add"></i>
    </a>
</div>


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

