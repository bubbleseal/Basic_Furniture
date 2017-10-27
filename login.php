<?php
session_start();

if (isset($_GET['logout'])) {
    $_SESSION = array();
    if ($_COOKIE[session_name()]) {
        setcookie(session_name(), '', time() - 42000, '/');
    }
    session_destroy();
    header('Location: login.php');
}

if (isset($_POST['name']) && $_POST['password']) {
    $con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
    $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());

    //Retrieve data from form
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    $_SESSION['name'] = NULL;
    $_SESSION['tag'] = NULL;

    //validate data	
    $sql = "SELECT * FROM users WHERE Username ='$name' and Password ='$pwd'";
    $result = mysqli_query($con, $sql);

    $count = mysqli_num_rows($result);

    // If result matched $name and $pwd
    if ($count == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION['name'] = $row['Name'];
        $_SESSION['add'] = $row['MailAdd'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['email'] = $row['Email'];

        $_SESSION['loggedin'] = true;
    } else {

        $_SESSION['tag'] = true;
    }
    mysqli_close($con);
}
?>

<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/login_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="/JS\login_val.js"></script>
    </head>

    <body class="home">
        <div class="page">
            <div class="header">
                <header class="header">
                    <a href="/" class="logo">
                        <img src="/logo.png" height="150px"/>
                    </a>
                </header>
            </div>

            <center class="acc-con">

<?php
//logged in
if (isset($_SESSION['name'])) {
    ?>
                    <h2 class="support-title">You are logged in. Welcome, <?php echo $_SESSION['name']; ?>.</h2>
                    <div class="submit">
                        <a href="login.php?logout=1">
                            <input type="submit" value="Log Out" id="log_button"/>	
                        </a>
                    </div>
                    <?php
                } else { //logged out
                    if (isset($_SESSION['tag'])) { //if user tried but failed
                        ?>
                        <h2 class="support-title">Wrong username & password.</h2>
                        <div class="submit">
                            <a href="login.php">
                                <input type="submit" value="Retry" id="log_button"/>	
                            </a>
                        </div>
                        <?php
                        $_SESSION['tag'] = NULL;
                    } else {
                        ?>
                        <h1 class="title">Log In</h1>

                        <div id="form-div">
                            <form name="login_form" onsubmit="return validate();" action="login.php" method="post">
                                <p class="tags">Name</p>
                                <input name="name" type="text" class="feedback-input" id="name" />
                                <p class="tags">Password</p>
                                <input name="password" type="password" class="feedback-input" id="password" />
                                <p class="tags">Note: You need to be logged in to order.</p>
                                <div class="submit">
                                    <input type="submit" value="Log In" id="log_button"/>	
                                </div>
                            </form>
                        </div>
        <?php
    }
}
?>
            </center>

            <hr/>
            <div class="footer">	
                <footer class="footer">
                    <small>
                        <b>Updated 2015 Basic company. </b>
                    </small>
                </footer>
            </div>
        </div>
    </body>
</html>