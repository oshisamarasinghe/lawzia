<?php
include '../../backend/lawyer-profile-update.php';

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
    <link href="../../js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="white">
<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/nav-lawyer.php';?>


<div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../../images/law-profile.jpg" alt="user background">
        </div>
        <figure class="card-profile-image">
            <img src="../../images/user-profile-pic.png" alt="profile image" class="circle z-depth-2 " id="profileImage">
        </figure>
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

    <div id="profile-page-content" class="row">
        <div id="work-collections">
            <div class="row">

                <div class="col s10 m6 l6">
                    <div class="tabs tab-profile z-depth-1 light-blue">
                        <div class="col s12">
                            <p class="white-text waves-effect waves-light">Profile Info</p>
                        </div>
                    </div>
                    <ul id="projects-collection" class="collection">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6">
                                    <p class="collections-title">Name</p>
                                    <p class="collections-content"><?= $username ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s6">
                                    <p class="collections-title">Email Address </p>
                                    <p class="collections-content"><?= $email ?></p>
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

                <!-- task-card -->
                <ul id="profile-page-about-feed" class="collection z-depth-1">

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
                </ul>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include '../header-footer/footer.php';?>


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