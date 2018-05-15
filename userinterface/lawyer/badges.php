<?php
include '../../backend/lawyer-info.php';
include '../../backend/badge-load.php';
include '../../backend/point-count.php';

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

</head>

<body class="white">
<!-- Page Loading -->
<?php
include '../header-footer/nav-lawyer.php'; ?>

<div class="row">

    <div class="col s12">

        <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
            <li>
                <div class="collapsible-header amber darken-3 white-text active"><i
                            class="mdi-action-wallet-membership"></i>Badge List

                </div>
                <div class="collapsible-body amber lighten-5">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel ">

                                <div class="row">
                                    <?php
                                    $load_query = "SELECT * FROM badge ";

                                    $badge_q = mysqli_query($connection, $load_query);
                                    while ($badges = mysqli_fetch_array($badge_q, MYSQLI_ASSOC)) {
                                        $des = $badges['bDescription'];
                                        $info = $badges['bInformation'];
                                        echo '<div class="col s12 m2 ">
                                            
                                                <img src="data:image/jpeg;base64,' . base64_encode($badges['bImage']) . '" height="130" width="130" alt="profile image" >
                                                <p class="card-title grey-text text-darken-4 "><b>' . $des . '</b>
                                                    <br>' . $info . '</p>
                                        </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapsible-header teal darken-3 white-text active"><i class="mdi-action-stars"></i>My
                    Achievements ( points : <?= $points ?> )

                </div>

                <div class="row ">
                    <div class="col s12 m12 l12">
                        <div class="card-panel teal lighten-5">

                            <div class="row">
                                <?php
                                $load_query = "SELECT * FROM badge  NATURAL JOIN lawyerbadge   WHERE username = '" . $username . "'";

                                $badge_q = mysqli_query($connection, $load_query);
                                while ($badges = mysqli_fetch_array($badge_q, MYSQLI_ASSOC)) {
                                    echo '<div class="col s12 m2 ">
                                            
                                                <img src="data:image/jpeg;base64,' . base64_encode($badges['bImage']) . '" height="130" width="130" alt="profile image"> 
                                                  <p class="card-title grey-text text-darken-4 "><b>' . $badges['bDescription'] . '</b> 
                                            
                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </li>

        </ul>

    </div>
</div>
</div>


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