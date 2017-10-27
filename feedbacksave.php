<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/register_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/feeback_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="/JS/feedback_val.js"></script>

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

            <?php
            $con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
            $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());

            //Retrive data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            //Add data into db
            $query = " INSERT INTO .`feedbackpile` (`Name`, `Email`, `Comment`) 
								VALUES ('$name','$email','$comment');";
            ?>

        </center>
        <div class= "phpresult">
<?php
if (mysqli_query($con, $query)) {
    ?>
                <center class="acc-con-reg">
                    <h2 class="support-title-feed">Your feedback has been recorded. Thank you. </h2>
                </center>

    <?php
}

mysqli_close($con);
?>
        </div>

        <hr/>
        <div class="footer">	
            <footer class="footer">
                <small>
                    <b>Updated 2015 Basic company.</b>
                </small>
            </footer>
        </div>
    </div>
</body>
</html>