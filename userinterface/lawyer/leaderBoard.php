<?php
include '../../backend/lawyer-info.php';
include '../../backend/badge-load.php'; ?>
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
    <link href="../../js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"
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
                <div class="collapsible-header cyan darken-4 white-text active"><i class="mdi-action-stars"></i>
                    LeaderBoard
                </div>
                <div class="collapsible-body cyan lighten-5">
                    <div class="row">
                        <div class="col s12 ">
                            <table id="data-table-row-grouping" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Points</th>
                                    <th>Country</th>
                                    <th>Email Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $lawyers_points = "SELECT * FROM lawyer ORDER BY points DESC ";

                                if ($run = mysqli_query($connection, $lawyers_points)) {
                                    while ($lawyer = mysqli_fetch_array($run, MYSQLI_ASSOC)) {
                                        $leadFname = $lawyer['fName'];
                                        $leadLname = $lawyer['lName'];
                                        $leadCountry = $lawyer['country'];
                                        $leadPoints = $lawyer['points'];
                                        $leadEmail = $lawyer['email'];

                                        echo '
                                                <tr>
                                                <td>' . $leadFname . '  ' . $leadLname . '</td>
                                                <td>' . $leadPoints . '</td>
                                                <td><b>' . $leadCountry . '</b></td>
                                                <td>' . $leadEmail . '</td>
                                                </tr>
                                            ';

                                    }
                                }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </li>

        </ul>
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
<!-- data-tables -->
<script type="text/javascript" src="../../js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../js/plugins/data-tables/data-tables-script.js"></script>


</body>
</html>