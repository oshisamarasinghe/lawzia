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
            <div id="profile-page-sidebar" class="col s12 m4">
                <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../../images/background-img.jpg" alt="user background">
                    </div>
                    <div class="card-content">
                        <img name="profileImage" class="circle responsive-img activator card-profile-image">
                        <span class="card-title activator grey-text text-darken-4"><?= $username ?></span>
                        <p><i class="mdi-action- cyan-text text-darken-2"></i> <?= $country ?></p>
                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?= $email ?></p>

                    </div>
                </div>
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