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

        <?php include '../../backend/connection.php';
        $profileImage = "SELECT Image FROM userImage WHERE username='" . $username . "'";
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
                        <p><i class="mdi-action-"></i>It is always better to keep your profile updated<br></p>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <div class="row">
                                        <p><i class="mdi-action-lock"></i><b>want to change password ?</b> <br>
                                            <a class="cyan-text" href="../change-password.php">Reset Password</a></p>
                                </div>
                            </div>
                        </div>
                     </div>

                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <p><i class="mdi-image-photo-camera"<b>Change profile Image</b><p>Select an Image </p>
                                    <form action="" enctype="multipart/form-data" method="post">
                                        <div class="file-field input-field">
                                            <input class="file-path validate " type="text"/>
                                            <div class="btn waves-light waves-effect  cyan">
                                                <span>File</span>
                                                <input type="file" name="image" id="image"/>
                                            </div>
                                        </div>
                                        <!--input name="image" id="image" type="file"/-->
                                        <p>Upload the Image </p>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <!--div id="raised-buttons" class="section"-->
                                                <button type="submit" class=" btn waves-light waves-effect cyan" name="insert"><i class="mdi-file-file-upload"></i>
                                                    Upload
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header cyan white-text  "><i class="mdi-action-question-answer"></i> Your
                        Questions (<?= $data['queCount'] ?>)
                    </div>

                    <div class="collapsible-body cyan lighten-5">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
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

<!--profile image upload-->
<script>
    $(document).ready(function () {
        $('#insert').click(function () {
            var image_name = $('#image').val();
            if (image_name === '') {
                alert('please insert a image');
                return false;
            } else {
                var image_extention = image_name.split('.').pop().toLowerCase();
                if (JQuery.inArray(image_extention, ['png', 'jpg', 'jpeg']) === -1) {
                    alert('Invalid type');
                    $('#image').val('');
                    return false;
                }
            }
        })

    })
</script>

</body>
</html>
<?php include '../../backend/connection.php';
$username = $_SESSION['username'];


if (isset($_POST['insert'])) {
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $actExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    $profileImage = "SELECT Image FROM userimage WHERE username='" . $username . "'";
    if ($is_query_run = mysqli_query($connection, $profileImage)) {
        while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
            $pImage = $row['Image'];

        }
    }

    if (in_array($actExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $image = addslashes(file_get_contents($fileTmpName));
                //update or insert
                if (empty($pImage)) {
                    $query = "INSERT INTO userimage(username,Image) VALUES('$username','$image')";
                    if ($is_query_run = mysqli_query($connection, $query)) {
                     echo "<script>alert('insert successful')</script>";

                     }
                } else {
                    $query = "UPDATE userimage SET Image='" . $image . "' WHERE username='" . $username . "'";
                    /**if ($is_query_run = mysqli_query($connection, $query)) {
                     * echo "<script>alert('update successful')</script>";
                     *
                     * }**/
                }
                try {

                    mysqli_autocommit($connection, FALSE);
                    mysqli_query($connection, $query);
                    mysqli_commit($connection);
                    echo "<script>alert('upload successful')</script>";
                    echo "<script> window.history.go(-1);</script>";

                } catch (Exception $e) {
                    $connection->rollback();
                }
            } else {
                echo "<script>alert('Your file is too large')</script>";
            }

        } else {
            echo "<script>alert('Error uploading the file')</script>";
        }
    } else {
        echo "<script>alert('You cant upload file of this type')</script>";
    }
}
    ?>