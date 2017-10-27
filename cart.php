<?php
session_start();

$_SESSION['order'] = NULL;

if (isset($_SESSION['loggedin'])) {
    $con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
    $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());

    //Check if user wants to checkout or shop: 

    if (isset($_POST['shop'])) {
        header("location: /");
    }

    //retrieve items
    $PHPSESSID = session_id();
    $result = mysqli_query($con, "SELECT * from cart INNER JOIN inventory ON cart.product = inventory.ProductName WHERE session_id = '" . $PHPSESSID . "'");

    $num = mysqli_num_rows($result);
    ?>

    <!DOCTYPE html> 
    <html> 
        <head> 
            <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
            <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
            <link type="text/css" rel="stylesheet" href="/stylesheets/order_stylesheet.css"/>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
            <title>Order Form</title> 
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
                    <h1 class="title">Order Form</h1>
                    <div id="detail-div">
    <?php
    if (isset($_POST['checkout'])) {
        ?>
                            <h2 class="support-title">Thank you, your orders will be delivered to you shortly.</h2>
                        <?php
                        }
                    } else {
                        header("location: login.php");
                    }
                    ?>
                    <table class="table">
                        <tr>
                            <td width="400px"><p class="detail"><b>Name:&nbsp</b><?php echo $_SESSION['name']; ?></p></td>
                            <td width="400px"><p class="detail"><b>Phone:&nbsp</b><?php echo $_SESSION['phone']; ?></p></td>
                        </tr>
                        <tr>
                            <td><p class="detail"><b>Email:&nbsp</b><?php echo $_SESSION['email']; ?></p></td>								
                            <td><p class="detail"><b>Mailing Address:&nbsp</b><?php echo $_SESSION['add']; ?></p></td>
                        </tr>
                    </table>
                </div>
                <div id="form-div">
                    <div id="top">
                        <table>
                            <tr>
                                <th width="600px">Product</th>
                                <th width="50px">Qty</th>
                                <th width="150px">Price</th>
                                <th width="100px">Action</th>
                            </tr>
                            <tr>
                                <th class="hr"><hr/></th>
                            <th class="hr"><hr/></th>
                            <th class="hr"><hr/></th>
                            <th class="hr"><hr/></th>
                            </tr>
<?php
$gtotal = 0;
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                                    <tr> 
                                        <td class="space" align="center"><?php echo trim(stripslashes($row['ProductName'])) ?></td> 
                                        <td class="space" align="center"><?php echo trim(stripslashes($row['qty'])) ?></td>  
                                        <td class="space" align="center"><?php
                            $total = $row['qty'] * $row['Price'];
                            $gtotal = $gtotal + $total;
                            $_SESSION['gtotal'] = $gtotal;
                            echo "$" . $total;
        ?></td> 
                                        <td class="space" align="center"><a href="remove.php?cid=<?php echo $row['cart_id'] ?>">Remove</a></td> 
                                    </tr> 		
    <?php
    }
} else {
    ?>
                                <tr>
                                    <td colspan="3" align="center" style="padding-top:30px; padding-bottom:30px;">You currently have no products selected.</td>
                                </tr>
<?php } ?>
                            <tr>
                                <td class="hr" colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <th colspan="2" align="right" style="padding-right:10px;">Total</th>
                                <td class="space" align="center"> <?php echo "$" . $gtotal; ?> </td>
                            </tr>
                        </table>
                        <form action="cart.php" method="post" style="padding-top:20px"> 
                            <input type="submit" name="checkout" value="Check Out" id="order_button" style="margin-right:30px"/>
                            <input type="submit" name="shop" value="Back to Shopping" id="order_button" style="margin-left:30px"/>
                        </form>
                    </div>
                </div> 

            </center>
        </div>
    </body>
</html>