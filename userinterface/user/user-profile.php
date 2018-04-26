<?php
include '../../backend/user-profile.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile Page | LAWZIA</title>

    <link rel="icon" href="../../images/lawzia-logo.jpg" sizes="32x32">

    <!--CSS-->
    <link rel="stylesheet" href="../../INDEX/assets/css/navmenu/styles.css">
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
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

<div id="profile-page" class="section">
    <div id="profile-page-content" class="row">
        <div class="row">
            <div class="card amber darken-2 col s12 ">
                <div class="card-content white-text center-align">
                    <p class="card-title"><i class="mdi-social-group"></i> HI <?= strtoupper($username) ?>, </p>
                    <p>WELCOME TO LAWZIA LEGAL ASSISTANT SERVICE</p>
                    <p>Experience Better Legal Services</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="profile-page-sidebar" class="col s12 m4">
                <div id="profile-card" class="card">
                    <div class="card-content">
                        <div class="tabs tab-profile z-depth-1 light-blue">
                            <div class="col s12">
                                <p class="white-text waves-effect waves-light">PERSONAL PROFILE</p>
                            </div>
                        </div>
                        <P><i class="mdi-social-person cyan-text text-darken-2"></i> <?= $username?></P>
                        <p><i class="mdi-social-location-city cyan-text text-darken-2"></i> <?= $country ?></p>
                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?= $email ?></p>

                    </div>
                </div>
            </div>

            <div id="profile-page-sidebar" class="col s12 m4">
                <div id="profile-card" class="card">
                    <div class="card-content">
                        <div class="tabs tab-profile z-depth-1 light-blue">
                            <div class="col s12">
                                <p class="white-text waves-effect waves-light">YOUR QUESTIONS</p>
                            </div>
                        </div>
                        <p> Haven't ask a Question yet?Ask your any legal Problem and get Answers.</p>
                        <?php include '../../backend/connection.php';
                        $qCount="SELECT count(qId) as QCount FROM question WHERE qUser='" .$username."'";
                        $count = mysqli_query($connection, $qCount);
                        $data= mysqli_fetch_assoc($count);
                            echo  $data['QCount'];
                        
                        ?>

                    </div>
                </div>
            </div>


                <div id="profile-page-sidebar" class="col s12 m4">
                    <div id="profile-card" class="card">
                        <div class="card-content">
                            <div class="tabs tab-profile z-depth-1 light-blue">
                                <div class="col s12">
                                    <p class="white-text waves-effect waves-light">SEARCH LAWYERS</p>
                                </div>
                            </div>
                            <p>Now You can search the well known lawyers in your country.Visit Profile for more contact Information</p>

                        </div>
                    </div>
        </div>


    </div>


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


</body>
</html>