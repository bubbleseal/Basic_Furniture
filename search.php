<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/mainpage_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/feeback_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/catalog_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body class="home">
        <div class="page">
            <div class="header">
                <header class="header">
                    <a href="/" class="logo">
                        <img src="/logo.png" height="150px"/>
                    </a>
                    <div id="header" class="header">
                        <ul class="header">
                            <li class="menu_item">
                                <a href="/kitchen_catalog.php" class="menu_item">
                                    <img src="/head_kitchen.jpg" height="70px"/>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="/bathroom_catalog.php" class="menu_item">
                                    <img src="/head_bath.jpg" height="70px"/>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="/living_catalog.php" class="menu_item">
                                    <img src="/head_living.jpg" height="70"/>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="/bedroom_catalog.php" class="menu_item">
                                    <img src="/head_bedroom.jpg" height="70"/>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="/light_catalog.php" class="menu_item">
                                    <img src="/head_lighting.jpg" height="70"/>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="/deco_catalog.php" class="menu_item">
                                    <img src="/head_deco.jpg" height="70"/>
                                </a>
                            </li>
                        </ul>
                        <ul class="second_header">
                            <li class="search-only">
                                <div class="search-box">
                                    <div class="search-container">
                                        <form action="search.php" method="post">
                                            <input class="search" name="k" type="text" placeholder="Search products" />
                                            <input type="submit" value="Go"/>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="secondmenu_item">
                                <a href="/register.php" class="secondmenu_item">
                                    <img src="/head_signup.png" height="20"/>
                                </a>
                            </li>
                            <li class="secondmenu_item">
                                <a href="/login.php" class="secondmenu_item">
                                    <img src="/head_login.png" height="20"/>
                                </a>
                            </li>
                            <li class="secondmenu_item">
                                <a href="/cart.php" class="secondmenu_item">
                                    <img src="/cart.png" height="20"/>
                                </a>	
                            </li>
                        </ul>
                    </div>
                </header>
            </div>

            <center class="container">
                <?php
                $con = mysqli_connect("mysql.basic.simonec.net", "simonec", "pineapplewater247")or die("Could not connect:" . mysql_error());
                $db = mysqli_select_db($con, "basicdb") or die("can't find db" . mysql_error());


                //collect
                if (isset($_POST['k'])) {
                    $searchq = $_POST['k'];


                    $query = mysqli_query($con, "SELECT * FROM inventory WHERE
						(
							ProductName LIKE '%$searchq%'
							OR ProductCategory LIKE '%$searchq%'
						)") or die("No results found.");

                    $count = mysqli_num_rows($query);

                    if ($count == 0) {
                        echo "No such results.";
                    } else {
                        ?>

                        <p class="result"><?php echo "<b>$count</b> search results for <b>$searchq</b>"; ?></p>

                        <?php
                        echo "<br/><br/><hr/><br/><br/>";
                        while ($row = mysqli_fetch_array($query)) {

                            $name = $row['ProductName'];
                            $type = $row['ProductCategory'];
                            $img = $row['Image'];
                            $price = $row['Price'];
                            $des = $row['Description'];
                            ?>		
                            <div class="ind-container">
                                <div id="image">
                                    <a>
                                        <span class="logo_icon">
                                            <img  class="img" src="<?php echo $img; ?>"/>
                                        </span>

                                        <span class="text">
                                            <div class="text-con">
            <?php echo $des; ?>
                                            </div>
                                            <div class="add-button">
                                                <form action="addtocart.php" method="get">
                                                    <div style="padding-bottom:10px;">
                                                        <select name="qty">
                                                <?php
                                                for ($i = 1; $i < 12; $i++) {
                                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                                }
                                                ?> 
                                                        </select>
                                                    </div>
                                                    <input name="pid" type="hidden" value="<?php echo $name; ?>"/>
                                                    <input type="submit" value="Add to Cart" class="add"/>
                                                </form>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                                <p class="description"><?php echo $name; ?><br/><?php echo $price; ?></p>
                            </div>
            <?php
        }
    }
}

mysqli_close($con);
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