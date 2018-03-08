<?php include 'connection.php';

if ((isset($_POST["username"])) && (isset($_POST["password"]))) {

    if (!get_magic_quotes_gpc()) {

        $username = addslashes($_POST["username"]);
        $password = addslashes($_POST["password"]);
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }

    $password = md5($password);
    session_start();
    $_SESSION['username'] = $username;
    /** @var TYPE_NAME $query */
    $query = "SELECT * FROM userauthentication WHERE username='" . $username . "'";

    if ($is_query_run = mysqli_query($connection, $query)) {

        while ($row = mysqli_fetch_array($is_query_run, MYSQL_ASSOC)) {
            if ($password == $row['password']) {
                $user_type = $row['usertype'];
                if ($user_type == 'gu') {

                    $_SESSION['username'] = $username;
                    header("location: ../userinterface/user/user-profile.php");
                } else if ($user_type == 'lu') {
                    $_SESSION['username'] = $username;
                    header("location: ../userinterface/lawyer/lawyer-first-profile.php");
                }

            } else {
                echo "<script>alert('Invalid username or password')</script>";
                echo "<script> window.history.go(-1);</script>";

            }
        }
    }

}
