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
<?php
include '../header-footer/nav-lawyer.php'; ?>
<!--div class="tabs tab-profile z-depth-1 red">
    <div class="col s12 offset-m10">
        <p class="white-text waves-effect waves-light">  <?= $qCountry ?>/<?= $qCategory ?></p>
    </div>
</div>

<!--question-->
<?php include '../../backend/connection.php';

$results_per_page = 2;
$questions = "SELECT * FROM question ORDER BY qID DESC ";
$result = mysqli_query($connection, $questions);
$no_of_results = mysqli_num_rows($result);
$no_of_pages = ceil($no_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page_no = 1;
} else {
    $page_no = $_GET['page'];
}
$this_page_first_result = ($page_no - 1) * $results_per_page;

/*if ($qCategory == "All") {
    $results_in_this_page = "SELECT * FROM question WHERE qCountry='" . $qCountry . "' ORDER BY qID DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;
} else {
    $results_in_this_page = "SELECT * FROM question  WHERE qCountry='" . $qCountry . "' AND qCategory='" . $qCategory . "'ORDER BY qID DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;
}*/

$results_in_this_page = "SELECT * FROM question  ORDER BY qID DESC LIMIT " . $this_page_first_result . ',' . $results_per_page;

if ($is_query_run = mysqli_query($connection, $results_in_this_page)) {


    while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
        $description = $row['qDescription'];
        $date = $row['qDate'];
        $user = $row['qUser'];
        $qId = $row['qID'];
        $cat = $row['qCategory'];
        $country = $row['qCountry'];
        $title = $row['qTitle'];

        //relevant user profile image
        $relevant_user_image = "SELECT Image FROM userimage WHERE username='" . $user . "' ";
        if ($is_relevant_user_image_query_run = mysqli_query($connection, $relevant_user_image)) {
            while ($row = mysqli_fetch_array($is_relevant_user_image_query_run, MYSQLI_ASSOC)) {
                $data = $row['Image'];

            }
        }


        echo '<div class="row">
                        <div class="col s12 m12 l12 " >
                            <ul class="collection grey lighten-2">
                                <li class="collection-item avatar grey lighten-2">
                                    <div class="col s7">';

        if (empty($data)) {
            echo '     <img src="../../images/user-profile-pic.png" alt="" class="circle">';
        } else {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                         id="profileImage">';
        }
        echo '                        <span class="title black-text">' . $user . '</span>
                                        <p class=" ultra-small">' . $country . '</p>
                                        <p class="ultra-small"> ' . $date . ' </p>
                                    </div>
                                 </li>
                            </ul>
                        </div>
                        <div class="model-email-content grey lighten-3">
                             <p class="cyan-text">Question : ' . $title . '</p>
                             <p> ' . $description . '</p>
                       
                      
                                <p><a href="QA-lawyer.php?question_id=' . $qId . '" class="green-text" >view answers</a> 
                                <a href="addAnswer.php?question_id=' . $qId . '" class="red-text">add answer </a> 
                                </p>
                        </div> 
                </div>';
    }

}
echo '
  
  <ul class="pagination"> 
    <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>';
for ($page = 1; $page <= $no_of_pages; $page++) {
    if ($page == $page_no)
        echo '<li><a class="active waves-effect cyan" href="all-questions-lawyer.php?page=' . $page . '">' . $page . '</a></li>';
    else
        echo '<li><a class="waves-effect " href="all-questions-lawyer.php?page=' . $page . '">' . $page . '</a></li>';

}
echo '
    <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
   </ul>';

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

