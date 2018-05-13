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


</head>

<body class="white">

<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/header-user.php'; ?>


<!--question-->
<?php include '../../backend/connection.php';
include 'vote.php';

$questionID = $_GET['question_id'];

$username = $_SESSION['username'];

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
        $relevant_user_image = "SELECT Image FROM userimage WHERE username='" . $user . "' ";
        if ($is_relevant_user_image_query_run = mysqli_query($connection, $relevant_user_image)) {
            while ($row = mysqli_fetch_array($is_relevant_user_image_query_run, MYSQL_ASSOC)) {
                $data = $row['Image'];

            }
        }

        echo ' <div class="row">
                 <div class="col s12 m12 l12  " >
                     <ul class="collection grey lighten-2">
                         <li class="collection-item avatar grey lighten-2">
                            <div class="col s7">';

        if (empty($data)) {
            echo '<img src="../../images/user-profile-pic.png" alt="" class="circle">';
        } else {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                 id="profileImage">';
        }
        echo '

                                
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
              
          </div>
            
            
            
            ';
         }


}

$answers = "SELECT * FROM answer NATURAL JOIN qa WHERE  qID='$questionID'";//all answers to relevant question
if ($is_inside_query_run = mysqli_query($connection, $answers)) {


    while ($in_row = mysqli_fetch_array($is_inside_query_run, MYSQL_ASSOC)) {
        $aDescription = $in_row['aDescription'];
        $aDate = $in_row['aDate'];
        $aUser = $in_row['aUser'];
        $aId = $in_row['aID'];

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
                                <br>
                            
                        
                   ';


            //checking whether the user has already liked the answer;

            $like_query = mysqli_query($connection, "SELECT * FROM likes WHERE username='" . $username . "' AND aID='" . $aId . "'");
            $unlike_query = mysqli_query($connection, "SELECT * FROM unlikes WHERE username='" . $username . "' AND aID='" . $aId . "'");

            $tot_votes = mysqli_query($connection, "SELECT * FROM answervote WHERE aID='" . $aId . "'");
            $tot = mysqli_fetch_array($tot_votes);
            $tot_likes = $tot['voteUpCount'];
            $tot_unlikes = $tot['voteDownCount'];


            //user has already like the post

            if (mysqli_num_rows($like_query) == 1) {

                echo ' <i class="mdi-action-thumb-up teal-text" id="liked"></i><span class="like">';
                echo getLikes($aId);
                echo '</span>';
                echo ' <i class="mdi-action-thumb-down grey-text" id="Dislike" onclick=like_to_unlike("' . $aId . '")></i>';
                echo getUnLikes($aId);


            } else if (mysqli_num_rows($unlike_query) == 1) {
                echo ' <i class="mdi-action-thumb-up grey-text"  id="unDislike" onclick=unlike_to_like("' . $aId . '")></i>';
                echo getLikes($aId);
                echo '  <i class="mdi-action-thumb-down teal-text" id="unliked" ></i>';
                echo getUnLikes($aId);
            } else {
                echo ' <i class="mdi-action-thumb-up grey-text" id="Like" onclick=liked("' . $aId . '")></i>';
                echo getLikes($aId);
                echo ' <i class="mdi-action-thumb-down grey-text" id="Unlike" onclick=unLiked("' . $aId . '")></i>';
                echo getUnLikes($aId);
            }
            echo '    </div>
                    </div>';
        }
    }
}
echo '';

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


<script type="text/javascript " src="../../js/custom/user-likes.js"></script>

</body>
</html>