<html>
<head>

    <title>Login Page | LAWZIA</title>

    <link rel="icon" href="../images/lawzia-logo.jpg" sizes="32x32">



    <!-- CORE CSS-->
    <link rel="stylesheet" href="../INDEX/assets/css/navmenu/styles.css">

    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="../css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="../css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body background="../images/background-img.jpg">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" action="../backend/login.php" method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="../images/lawzia-logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">Meet your Legal Assistant</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text" name="username">
                    <label for="username" class="center-align">Username</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light col s12" type="submit">Login</button>

            </div>
                <div class="row">
                    <!--div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="change-password.php">Forgot password ?</a></p>
                    </div-->
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 16">
                        <p class="margin medium-small"><a href="lawyer/lawyer-register-old.php">Lawyer SignUp!</a></p>
                    </div>
                    <div class="input-field col s6 m6 16">
                        <p class="margin medium-small"><a href="user/user-register.php">User SignUp!</a></p>
                    </div>
                </div>
        </form>
    </div>
</div>

<!-- jQuery Library -->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="../js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="../js/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../js/plugins.js"></script>

</body>

</html>