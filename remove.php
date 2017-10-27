<?php 
	session_start();
	
	$con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
        $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());
	
	$PHPSESSID = session_id(); 
	
	//clean variable 
	if(isset($_GET['cid']))
	{ 
		$cleancid = mysql_escape_string($_GET['cid']); 
		$remove = "DELETE FROM cart WHERE cart_id='".$cleancid."' AND session_id ='".$PHPSESSID."' "; 
		mysqli_query($con, $remove); 
		header("location:cart.php"); 
	}
?>