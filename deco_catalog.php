<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="/stylesheets/header_stylesheet.css"/>
        <link type="text/css" rel="stylesheet" href="/stylesheets/catalog_stylesheet.css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
            <center class="con">
                <h1 class="main-title">HOME DECO</h1>
                <img src="/deco_main.png" class="main"/>
            </center>
            <hr/>
            <center class="container">
                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/01.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Ribbon in the sky: A trio of earthenware planters is a celebration of celestial color.
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
                                        <input name="pid" type="hidden" value="Jamil Earthenware Planters"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Jamil Earthenware Planters<br/>$113</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/02.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Clean and modern without numerals, NOVA's Vendome Pendulum Wall Clock is an understated focal point. 
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
                                        <input name="pid" type="hidden" value="Vendome Pendulum Wall Clock"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Vendome Pendulum Wall Clock<br/>$227</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/03.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Drop everything for this hanging glass vase with great posy potential.
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
                                        <input name="pid" type="hidden" value="Madie Hanging Glass Vase"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Madie Hanging Glass Vase<br/>$63</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/04.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    In shades of cream and blue, this set of three Earthenware planters feature a dimensional geometric pattern and add style to houseplants.
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
                                        <input name="pid" type="hidden" value="Thayer Earthenware Planters"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Thayer Earthenware Planters<br/>$145</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/05.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Add the finishing touch to your room with this stylish gray accented mirror, part of the Reflective collection from Essentials by Connie Post.
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
                                        <input name="pid" type="hidden" value="Essentials Reflective Mirror"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Essentials Reflective Mirror<br/>$136</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/06.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    This set of three Marcia square terrariums feature soft, aged paint finishes in cube shaped metal frame.
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
                                        <input name="pid" type="hidden" value="Marcia Square Terrariums"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Marcia Square Terrariums<br/>$75</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/07.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Infinity Instruments Doorbell Clock is a one of a kind wall and/or tabletop clock that also doubles as a doorbell.
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
                                        <input name="pid" type="hidden" value="Wireless Designer Doorbell Clock"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Wireless Designer Doorbell Clock<br/>$31</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/08.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    This American made decorative wall clock measures a full 24 inches in diameter.
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
                                        <input name="pid" type="hidden" value="Sheer Ebony Oversized Wall Clock"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Sheer Ebony Oversized Wall Clock<br/>$316</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/deco/09.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Add depth to your bedroom or living room using the simple Blomus Muro Square Mirror. 
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
                                        <input name="pid" type="hidden" value="Blomus Muro Square Mirror"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Blomus Muro Square Mirror<br/>$83</p>
                </div>

            </center>
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