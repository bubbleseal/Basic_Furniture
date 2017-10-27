<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/register_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="/JS/reg_val.js"></script>
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

            //Retrieve data from form
            $name = $_POST['name'];
            $ic = $_POST['IC'];
            $add = $_POST['address'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $user = $_POST['username'];
            $pwd = $_POST['password'];

            $gender = $_POST['gender'];
            $stt = $_POST['status'];

            //Add data into db
            $query = " INSERT INTO .`users` (`Name`, `IC`, `Gender`, `MaritalStatus`, `HomeAdd`, `MailAdd`, `Phone`, `Email`, `Username`, `Password`) 
								VALUES ('$name','$ic','$gender','$stt','$add','$mail','$phone','$email','$user','$pwd');";
            ?>
        </center>
        <div class = "phpresult">
<?php
if (mysqli_query($con, $query)) {
    ?>
                <center class="acc-con-reg">
                    <h1 class="title">WELCOME</h1>
                    <h2 class="support-title-reg">Registration successful. Thank you for registering with BASIC.<br/>Please log in to start purchasing your desired furniture.</h2>
                    <div class="submit">
                        <a href="login.php">
                            <input type="submit" value="Log In" id="reg_button"/>		
                        </a>
                    </div>
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