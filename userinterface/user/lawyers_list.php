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

$country = $_POST['country'];
//$lawyer_country = "SELECT * FROM lawyer WHERE country='$country'";

$results_per_page = 3;
$lawyer_country= "SELECT * FROM lawyer WHERE country='$country'";
$result = mysqli_query($connection, $lawyer_country);
$no_of_results = mysqli_num_rows($result);
$no_of_pages = ceil($no_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page_no = 1;
} else {
    $page_no = $_GET['page'];
}

$this_page_first_result = ($page_no - 1) * $results_per_page;

$results_in_this_page="SELECT * FROM lawyer WHERE country='$country' DESC LIMIT ".$this_page_first_result.','.$results_per_page;

echo '
        <div class="col s12 offset-m10">
            <p class="black-text waves-effect waves-light ">  Lawyers  | ' . $country . ' </p>
        </div>
    ';

if ($is_query_run = mysqli_query($connection, $lawyer_country)) {
    while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
        $username = $row['username'];
        $fName = $row['fName'];
        $lName = $row['lName'];
        $country = $row['country'];
        $email = $row['email'];
        $company = $row['workCompany'];
        $experience = $row['workExperience'];
        $wEmail = $row['workEmail'];
        $wContact = $row['workContact'];
        $street = $row['workAddStreet'];
        $city = $row['workAddCity'];
        $wCountry = $row['WorkAddCountry'];
        $position = $row['workPosition'];

        //relevant lawyer profile image
        $relevant_Lawyer_image = "SELECT Image FROM userimage WHERE username='" . $username . "' ";
        if ($is_inside_query_run = mysqli_query($connection, $relevant_Lawyer_image)) {
            while ($inside_row = mysqli_fetch_array($is_inside_query_run, MYSQLI_ASSOC)) {
                $data = $inside_row['Image'];

            }
        }

        //lawyers practise areas
        $practise_areas_query="SELECT area FROM lawyerpractisearea WHERE username='".$username."'";
        if($area_list_query_run=mysqli_query($connection,$practise_areas_query)){
            while($areas_row=mysqli_fetch_array($area_list_query_run,MYSQLI_ASSOC)){
                $areas_list=$areas_row['area'];
            }

        }



        echo '
                     <div class="row z-depth-1">
                         <div class="col s12 m7 l0">
                            <div class="col s7">
                ';
        if (empty($data)) {
            echo '
                  <figure class="card-profile-image">
                     <img src="../../images/user-profile-pic.png" alt="profile image" height="200" width="200" class="circle z-depth-2 "
             id="profileImage" >
                  </figure>';
        } else {
            echo ' <figure class="card-profile-image">
                     <img src="data:image/jpeg;base64,' . base64_encode($data) . '" height="200" width="200" alt="profile image" class="circle z-depth-2 "
                                     id="profileImage">
                   </figure>';
        }

        echo '
                  </div>
                <h5 class="regular" >' . $fName . '  ' . $lName . '</h5>
                <h6 class="cyan-text" >'.$position.' | ' . $country . ' | ' . $email . '</h6>
                <p class="collections-title"> ';

                 foreach (explode(',',$areas_list) as $area ){
                    echo $area .' | ';
                }
        echo'
                </p>
                <h6>' . $company . '<br>
                <br>
                ' . $street . ',<br>
                ' . $city . ',<br>
                ' . $wCountry . '<br></h6>
                <h6 class="indigo-text darken-3" > '.$wEmail.' | '.$wContact.' </h6>
            </div>
         </div>';
    }


}
echo '
  
  <ul class="pagination"> 
    <li class="disabled"><i class="mdi-navigation-chevron-left"></i></li>';
for ($page = 1; $page <= $no_of_pages; $page++) {
    if ($page == $page_no)
        echo '<li><a class="active waves-effect cyan" href="lawyers_list.php?page=' . $page . '&country='.$country.'">' . $page . '</a></li>';
    else
        echo '<li><a class="waves-effect " href="lawyers_list.php?page=' . $page . ' &country='.$country.'">' . $page . '</a></li>';

}
echo '
    <li class="disabled"><i class="mdi-navigation-chevron-right"></i></li>
   </ul>';
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