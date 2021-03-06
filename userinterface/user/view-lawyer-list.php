<?php session_start();
$country = $_POST['country'];; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lawyer list | LAWZIA</title>

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
    <link href="../../js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"
          media="screen,projection">

</head>

<body class="white">
<!-- Page Loading >

<?php
include '../header-footer/header-user.php';
include '../../backend/connection.php';

$country = $_POST['country'];


$lawyer_country = "SELECT * FROM lawyer WHERE country='$country'";

if ($is_query_run = mysqli_query($connection, $lawyer_country)) {
    echo '<div class="row">
                 <div class="col s12 m12 l12 " >
                     <ul class="collection">
                         <div>
                              <a class="collection-item active cyan">Lawyers-' . $country . '</a>
                         </div>';
    while ($row = mysqli_fetch_array($is_query_run, MYSQLI_ASSOC)) {
        $username = $row['username'];
        $fName = $row['fName'];
        $lName = $row['lName'];
        $email = $row['email'];

        //relevant lawyer profile image
        $relevant_Lawyer_image = "SELECT Image FROM userimage WHERE username='" . $username . "' ";
        if ($is_inside_query_run = mysqli_query($connection, $relevant_Lawyer_image)) {
            while ($inside_row = mysqli_fetch_array($is_inside_query_run, MYSQLI_ASSOC)) {
                $data = $inside_row['Image'];

            }
        }
        if (empty($data)) {
            echo '
                 <li class="collection-item avatar  grey lighten-5">
                            
                         <div class="col s7">
                            <img src="../../images/user-profile-pic.png" alt="" class="circle">
                            <span class="title cyan-text">' . ($fName) . " " . ($lName) . '</span>
                            <a href="view-lawyer-profile.php?username=' . $username . '" class="secondary-content cyan-text"><i class="mdi-social-person"></i>view profile</a> 
                            <p >' . $email . ' </p>
                            
                        
                        </div>
                      </li>
                       
                 ';
        } else {
            echo '
                 <li class="collection-item avatar  grey lighten-5">
                            
                         <div class="col s7">
                           <img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="130" width="130" alt="profile image" class="circle z-depth-2 "
                 id="profileImage">
                            <span class="title cyan-text">' . ($fName) . " " . ($lName) . '</span>
                            <a href="view-lawyer-profile.php?username=' . $username . '" class="secondary-content cyan-text"><i class="mdi-social-person"></i>view profile</a> 
                            <p >' . $email . ' </p>
                            
                        
                        </div>
                      </li>
                       
                 ';
        }


    }
    echo '     </ul>
            </div>
        </div>
    
    ';
}
?>


<!--FOOTER-->
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
<!-- data-tables -->
<script type="text/javascript" src="../../js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<!--script type="text/javascript" src="../js/plugins/data-tables/data-tables-script.js"></script-->
<script type="text/javascript" src="../../js/plugins.js"></script>
</body>
</html>

