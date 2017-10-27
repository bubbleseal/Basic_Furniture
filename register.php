<?php
	session_start();
?>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/register_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="/JS/r_val.js"></script>
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
                <h1 class="title">Sign Up with Us</h1>
                <?php
                

                if (!isset($_SESSION['loggedin'])) {
                    ?>				
                    <div id="form-div">
                        <form name="reg" onsubmit="return validate_all()" action="reg_result.php" method="post">
                            <div id="form-div-left">		
                                <p class="tags">Name ( as per IC )</p>
                                <input name="name" type="text" class="feedback-input" id="name" />

                                <p class="tags">IC Number</p>
                                <input name="IC" type="text" class="feedback-input" id="IC" maxlength="12"/>

                                <p class="tags">Gender</p>
                                <select name="gender" class="feedback-input" id="gender">
                                    <option value="" disabled selected style="display:none;"></option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>

                                <p class="tags">Marital Status</p>
                                <select name="status" class="feedback-input">
                                    <option value="" disabled selected style="display:none;"></option>
                                    <option value="Married">Married</option>
                                    <option value="Engaged">Engaged</option>
                                    <option value="Single">Single</option>
                                </select>

                                <p class="tags">Home Address</p>
                                <textarea name="address" class="feedback-input" id="address"></textarea>
                            </div>	

                            <div id="form-div-right">
                                <p class="tags">Mailing Address</p>
                                <textarea name="mail" class="feedback-input" id="mail"></textarea>

                                <p class="tags">Phone Number</p>
                                <input name="phone" type="text" class="feedback-input" id="phone"/>

                                <p class="tags">Email</p>
                                <input name="email" type="text" class="feedback-input" id="email"/>

                                <p class="tags">Username</p>
                                <input name="username" type="text" class="feedback-input" id="username" maxlength="12"/>

                                <p class="tags">Password</p>
                                <input name="password" type="password" class="feedback-input" id="password" maxlength="12"/>

                            </div>
                            <div class="submit">
                                <input type="submit" value="Register" id="reg_button"/>	
                            </div>
                        </form>
                    </div>
    <?php
} else {
    ?>
                    <h2 class="support-title-x">You need to be logged out to register.</h2>
                    <div class="submit">
                        <a href="login.php?logout=1">
                            <input type="submit" value="Log out" id="reg_button"/>	
                        </a>
                    </div>
    <?php
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