<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Lawyer Page | LAWZIA</title>

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

</head>

<body class="white">
<!-- Page Loading -->
<?php include '../header-footer/loading.php';
include '../header-footer/header-user.php'; ?>
<?php include '../../backend/connection.php';
$username=$_GET['username'];
$query="SELECT username FROM lawyer WHERE username='.$username.'";
if ($is_query_run = mysqli_query($connection, $query)) {
    while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $Name = $row['username'];
        $country =$row['country'];
        $email = $row['email'];

    }
}


?>


<div id="profile-page" class="section">
    <div id="profile-page-content" class="row">
        <div class="row">
            <div class="col s12 m12">
                <div id="profile-page-wall-share" class="row">
                    <ul id="projects-collection" class="collection">
                        <li class="collection-item">
                            <figure class="card-profile-image">
                                <img src="../../images/user-profile-pic.png" alt="profile image"
                                     class="circle z-depth-1 " id="profileImage">
                            </figure>
                            <p class="collections-title"><i
                                        class="mdi-action-perm-identity cyan-text text-darken-2"></i>Name  </p>
                            <p class="collections-title"><i
                                        class="mdi-action-wallet-travel cyan-text text-darken-2"></i>work experience
                            </p>
                            <p class="collections-title"><i class="mdi-action-assessment cyan-text text-darken-2"></i>Areas
                                of practise </p>
                            <p class="collections-title"><i
                                        class="mdi-social-location-city cyan-text text-darken-2"></i>Country</p>
                            <p class="collections-title"><i class="mdi-communication-email cyan-text text-darken-2"></i>Email
                                Address </p>
                            <p class="collections-title"><i
                                        class="mdi-action-account-balance-wallet cyan-text text-darken-2"></i>Work
                                Place</p>
                        </li>

                    </ul>
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