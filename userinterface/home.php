
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page | LAWZIA</title>

    <link rel="icon" href="../images/lawzia-logo.jpg" sizes="32x32">

    <!--CSS-->
    <link rel="stylesheet" href="../INDEX/assets/css/navmenu/styles.css">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">

</head>

<body background="../images/dubai_court.jpg">
<header id="header" class="page-topbar">
    <nav class="brown darken-1 hide-on-med-and-down">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a href=".../user/user-profile.php" class="white-text">
                        About Us
                    </a>
                </li>
                <li>
                    <a class="white-text" href="user/user-register.php">
                        <span>General User Registration</span>
                    </a>
                </li>
                <li>
                    <a class="white-text" href="lawyer/lawyer-register.php">
                        <span>Lawyer Registration</span>
                    </a>
                </li>
                <li>
                    <a class="white-text" href="login.php">
                        <span>Login</span>
                    </a>
                </li>
            </ul>


        </div>
    </nav>
</header>
<!-- END HEADER -->

<div id="profile-page" class="section" >
    <div id="profile-page-content" class="row">

        <div class="row">
            <div class="card amber darken-3 col s12 ">
                <div class="input-field col s12 center">
                    <img src="../images/lawzia-logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
                </div>

                <div class="card-content white-text center-align">
                    <p class="card-title">WELCOME TO LAWZIA LEGAL ASSISTANT SERVICE  </p>
                    <p>Experience A  Better and Trustworthy Legal Services</p>
                </div>
            </div>
        </div>
</div>
</div>

<footer class="page-footer">
    <div class="footer-copyright ">


            <span class="center-align "> <a class="black-text text-lighten-5">LAWZIA  is a place where you can ask any legal question.
                                Legal Experts from our network are ready to help you.
                                Join our network today resolve you legal issues free.</a></span>
            <br>
        <span class="center-align">  <a class="black-text text-lighten-2"><b>OUR SERVICES TO YOU</b><br>
                <ul>
                    <li>ASK- A- LAWYER</li>
                    <li>SEARCH- A- LAWYER</li>
                    <li>ANSWER- A- QUESTION</li>

                </ul></a></span>
        </div>
    
</footer>

<!-- insert footer-->
<!--?php include '../header-footer/footer.php';
?>
<!-- jQuery Library -->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="../js/plugins.js"></script>

<!-- Toast Notification -->
<script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>WELCOME LAWZIA</span>', 1500);
        }, 2000);
        setTimeout(function() {
            Materialize.toast('<span>NOT A MEMBER ? REGISTER NOW!</span>', 3000);
        }, 5000);

    });
    </script>

</body>
</html>
