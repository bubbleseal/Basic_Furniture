<?php

session_start();
ob_start();

if (isset($_SESSION['loggedin'])) {
    $con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
    $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());

    if (isset($_REQUEST['pid'])) {
        $ID = $_REQUEST['pid'];
        $qty = $_REQUEST['qty'];
        $query = mysqli_query($con, "SELECT * FROM inventory WHERE ProductName LIKE '%$ID%'");


        $PHPSESSID = session_id();
        $addtocart = "INSERT INTO cart (session_id, product, qty)
			VALUES ('$PHPSESSID','$ID','$qty')";
        mysqli_query($con, $addtocart);
        header("location: cart.php");
        exit;
    }
} else {
    header("location: cart.php");
}
mysqli_close($con);
ob_end_flush();
?> 