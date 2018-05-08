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
$lawyerName=$_GET['username'];
$query="SELECT * FROM lawyer WHERE username='".$lawyerName."'";


if ($is_query_run = mysqli_query($connection, $query)) {
    while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $fName = $row['fName'];
        $lName = $row['lName'];
        $country = $row['country'];
        $email = $row['email'];
        $company = $row['workCompany'];
        $experience = $row['workExperience'];
        $wEmail = $row['workEmail'];
        $wContact = $row['workContact'];
        $street = $row['workAddStreet'];
        $city=$row['workAddCity'];
        $wCountry=$row['WorkAddCountry'];

    }
}
        $profileImage = "SELECT Image FROM userimage WHERE username='" . $lawyerName . "'";
        if($is_query_run = mysqli_query($connection, $profileImage)) {
            while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
                $pImage = $row['Image'];

            }

        }
?>



<div id="profile-page" class="section">
    <div id="profile-page-content" class="row">
        <div class="row z-depth-2">
            <div class="col s12 m12 l6">
                <div class="col s7">
                            <?php
                            if (empty($pImage)) {
                            echo '
                            
                            <figure class="card-profile-image">
                                <img src="../../images/user-profile-pic.png"alt="profile image"height="200" width="200" class="circle z-depth-2 "
                                     id="profileImage">
                            </figure>

                            ';


                            } else {


                            echo '
                            <figure class="card-profile-image">
                                <img src="data:image/jpeg;base64,' . base64_encode($pImage) . '" height="200" width="200" alt="profile image" class="circle z-depth-2 "
                                     id="profileImage">
                            </figure>

                            ';

                            }
                            ?>
                </div>


                            <h5 class="regular" > <?= $fName."  " .$lName ?> </h5>
                            <h6 class="cyan-text" ><?= $country ?> | <?= $email ?></h6>
                            <p class="collections-title"><i
                                        class="mdi-action-wallet-travel cyan-text text-darken-2"></i><?=$experience?> experience in
                            </p>
                            <h6><?=$company?><br>
                                <br>
                                <?=$street?>,<br>
                                <?=$city?>,<br>
                                <?=$wCountry?></h6>




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