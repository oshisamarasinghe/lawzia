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
include '../header-footer/nav-lawyer.php'; ?>

<!--question-->
<?php include '../../backend/connection.php';

$results_per_page=6;
$questions = "SELECT * FROM question ORDER BY qID DESC ";
$result=mysqli_query($connection, $questions);
$no_of_results=mysqli_num_rows($result);
$no_of_pages=ceil($no_of_results/$results_per_page);

if(!isset($_GET['page'])){
    $page_no=1;
}else{
    $page_no=$_GET['page'];
}
$this_page_first_result=($page_no-1)*$results_per_page;
$results_in_this_page="SELECT * FROM question  ORDER BY qID DESC LIMIT ".$this_page_first_result.','.$results_per_page;

if ($is_query_run = mysqli_query($connection, $results_in_this_page)) {


    while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $description = $row['qDescription'];
        $date = $row['qDate'];
        $user = $row['qUser'];
        $qId = $row['qID'];
        $cat = $row['qCategory'];
        $country = $row['qCountry'];



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
                                <p><b> ' . $description . '</b></p>
                                
                                
                                </div>
                            <p><a href="addAnswer.php?question_id=' . $qId . '">add answer </a> 
                                <br><a href="question-page-lawyer.php?question_id=' . $qId . '" >view answers</a> </p>
                       </div>
                            </li>
                            
                       </ul>
                  </div>
                </div>
               
                      
                 ';

    }

}
echo'
  
  <ul class="pagination"> ';
for($page=1;$page<=$no_of_pages;$page++){
    if($page==$page_no)
        echo'<li><a class="active" href="QA-lawyer.php?page='.$page.'">'.$page .'</a></li>';
    else
        echo'<li><a href="QA-lawyer.php?page='.$page.'">'.$page .'</a></li>';

}
echo'</div>';
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

