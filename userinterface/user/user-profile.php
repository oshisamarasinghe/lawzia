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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Page - User | LAWZIA</title>

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
include '../header-footer/header-user.php'; ?>


<div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../../images/volkov-areas-practice.jpg" alt="user background">
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

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col s12">

            <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header cyan white-text active"><i class="mdi-action-account-circle"></i>
                        Personal Profile Update
                    </div>
                    <div class="collapsible-body cyan lighten-5">
                        <p>It is always better to keep your profile updated<br></p>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <div class="row">
                                        <form class="col s12" method="post"
                                              action="../../backend/user-profile-update.php">
                                            <h4 class="header2">Profile Forum</h4>
                                            <div class="row">
                                                <div class="input-field col s4">
                                                    <i class="mdi-action-account-circle prefix"></i>
                                                    <input id="icon_username " type="text" value="<?= $username ?>">
                                                    <label class="active" for="icon_username">Username</label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <i class="mdi-communication-email prefix"></i>
                                                    <input id="icon_email" type="email" value="<?= $email ?>">
                                                    <label class="active" for="icon_email">Email</label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light" type="submit"
                                                                name="action">Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>want to change password ? <br>
                            <a class="cyan-text" href="../change-password.php">Reset Password</a></p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header cyan white-text  "><i class="mdi-action-question-answer"></i> Your
                        Questions (<?= $data['queCount'] ?>)
                    </div>
                    <div class="collapsible-body cyan lighten-5">
                        <p>Click on the question to view details</p>
                        <?php include '../../backend/connection.php';
                        $question_list = "SELECT * FROM question where qUser='" . $username . "'";

                        if ($is_query_run = mysqli_query($connection, $question_list)) {

                            while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
                                $qNo = $row['qID'];
                                $qCat = $row['qCategory'];
                                $qDate = $row['qDate'];

                                echo '<a class="cyan-text col s12 offset-10"  href="view-answers.php?question_id=' . $qNo . '">Question No: ' . $qNo . ' asked on  :' . $qDate . '  of category  ' . $qCat . '</a><br>
                                          
                                    ';

                            }
                        }
                        ?>
                    </div>
                </li>

            </ul>

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