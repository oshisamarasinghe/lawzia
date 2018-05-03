<?php
include '../../backend/lawyer-info.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page | LAWZIA</title>

    <link rel="icon" href="../../images/lawzia-logo.jpg" sizes="32x32">

    <!-- CORE CSS-->
    <link rel="stylesheet" href="../../INDEX/assets/css/navmenu/styles.css">
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">

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


<div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../../images/home-law.jpg" alt="user background">
        </div>

        <?php
        $profileImage = "SELECT Image FROM lawyerimage WHERE username='" . $username . "'";
        if ($is_query_run = mysqli_query($connection, $profileImage)) {
            while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
                $pImage = $row['Image'];

            }
            if (empty($pImage)) {
                echo '
                 <figure class="card-profile-image">
                  <img src="../../images/user-profile-pic.png"alt="profile image" class="circle z-depth-2 "
                 id="profileImage">
                 </figure>
                
                 ';


            } else {


                echo '
                 <figure class="card-profile-image">
                  <img src="data:image/jpeg;base64,' . base64_encode($pImage) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                 id="profileImage">
                 </figure>
                
                 ';

            }
        }

        ?>


        <div class="card-content">
            <div class="row">
                <div class="col s3 offset-s2">
                    <h4 class="card-title grey-text text-darken-4"><?= $username ?></h4>
                    <p class="medium-small grey-text"><?= $country ?></p>
                </div>

                <div class="col s3 offset-l3 right-align">
                    <a class="btn-floating activator waves-effect waves-light darken-2 right">
                        <i class="mdi-action-perm-identity"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-reveal">
            <p>
                <span class="card-title grey-text text-darken-4"> <i class="mdi-navigation-close right"></i><i
                            class="mdi-action-perm-identity cyan-text text-darken-2"></i><?= strtoupper($fName) . " " . strtoupper($lName) ?></span>

            </p>
            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> <?= $contact ?></p>
            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?= $email ?></p>
            <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i><?= $country ?></p>
        </div>
    </div>

    <div class="row">

        <div class="col s12">

            <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header cyan white-text active"><i class="mdi-action-account-circle"></i>
                        Account Settings
                    </div>
                    <div class="collapsible-body cyan lighten-5">
                        <p>It is always better to keep your professional profile updated<br>
                            Claiming your profile helps potential clients get to know you. Lawyers who have claimed
                            their profiles are also eligible to participate in the LAWZIA Legal Answers community.<br>click
                            the following link to update
                            <br><a href="lawyer-profile-update.php" class="cyan-text">update profile >> </a></p>

                        <p>want to change password ? <br>
                            <a class="cyan-text" href="../change-password.php">Reset Password >></a></p>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header cyan white-text"><i class="mdi-action-question-answer"></i> Your
                        Answers
                    </div>
                    <div class="collapsible-body cyan lighten-5">
                        <p>
                            <?php include '../../backend/connection.php';
                            $answer_list = "SELECT * FROM answer where aUser='" . $username . "'";
                            $count = 0;
                            if ($is_query_run = mysqli_query($connection, $answer_list)) {

                                while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
                                    $aId = $row['aID'];
                                    $aDate = $row['aDate'];
                                    $aDes = $row['aDescription'];

                                    $qa = "SELECT * FROM qa NATURAL JOIN question WHERE aID='" . $aId . "'";
                                    if ($qa_query_run = mysqli_query($connection, $qa)) {

                                        while ($in_row = mysqli_fetch_array($qa_query_run, MYSQLI_ASSOC)) {
                                            $qCat = $in_row['qCategory'];
                                            $qDate = $in_row['qDate'];
                                            $qUser = $in_row['qUser'];
                                            $qNo = $in_row['qID'];

                                            $count++;
                                            echo '<a class="cyan-text col s12 offset-10" 
                                                     href="question-page-lawyer.php?question_id=' . $qNo . '">' . $count . ' .Answered  question no:
                                                     ' . $qNo . '  of category  ' . $qCat . ' asked by ' . $qUser . '  on :' . $aDate . ' </a><br>';
                                        }
                                    }
                                }
                            }
                            ?>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header cyan white-text"><i class="mdi-action-face-unlock"></i>Your Badges

                    </div>
                    <div class="collapsible-body cyan lighten-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</div>

<!--div id="profile-page-content" class="row">
        <div id="work-collections">
            <div class="row">
                <div class="col s12 ">
                    <div class="tabs tab-profile z-depth-1 light-blue">
                        <div class="col s12">
                            <p class="white-text waves-effect waves-light">LAWZIA PROFILE</p>
                        </div>
                    </div>
                    <ul id="projects-collection" class="collection">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6">
                                    <p class="collections-title">Your Answers</p>
                                    <p class="collections-content">Check the list of questions and answers </p>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6">
                                    <p class="collections-title">Edit Biography </p>
                                    <p class="collections-content"></p>
                                    <form method="post" action="lawyer-profile-update.php">
                                        <button class="btn-flat waves-effect pink accent-2 white-text" type="submit" name="action">
                                            UPDATE WORK PROFILE
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6">
                                    <p class="collections-title">Contact No</p>
                                    <p class="collections-content"><?= $contact ?></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- task-card >
                <ul-- id="profile-page-about-feed" class="collection z-depth-1">

                    <li class="collection-item ">
                        <span class="title">Answer new Questions</span>
                        <br> <span class="ultra-small">select the relevant country and category</span>

                    </li>
                    <li class="collection-item ">
                        <span class="title">How to earn badges</span>
                        <br> <span class="ultra-small">Go to the link and see</span><br>
                    </li>
                    <li class="collection-item ">
                        <span class="title">Update your Professional Profile</span>
                        <br><span class="ultra-small">update your work profile</span>
                        <br><span class="ultra-small">update profile Image and make your profile public</span>
                        <br>
                        <form method="post" action="lawyer-profile-update.php">
                            <button class="btn-flat waves-effect pink accent-2 white-text" type="submit" name="action">
                                UPDATE WORK PROFILE
                                <i class="mdi-content-send right"></i>
                            </button>
                    </li>
                </ul-->


<!-- FOOTER -->
<!--?php include '../header-footer/footer.php'; ?>


<!-- jQuery Library -->
<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../js/plugins.js"></script>


</body>
</html>