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
                <h1 class="main-title">BATHROOM</h1>
                <img src="/bathroom_main.png" class="main"/>
            </center>
            <hr/>
            <center class="container">
                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/01.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Vanity Set Features: Vanity cabinet made of engineered wood. Cabinet features waterproof panels.
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
                                        <input name="pid" type="hidden" value="39 Inch Larch Canapa Bathroom Vanity Set"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">39 Inch Larch Canapa Bathroom Vanity Set<br/>$1,983</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/02.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The Unidoor Plus Shower Enclosure will impress with the fluid style of a completely frameless glass design.
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
                                        <input name="pid" type="hidden" value='Unidoor Plus 51-1/2" x 30-3/8" x 72" Shower Enclosure Half Frosted Glass'/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Unidoor Plus 51-1/2" x 30-3/8" x 72" Shower Enclosure Half Frosted Glass<br/>$1,130</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/03.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The WT622 50" x 30" walk-in tub combines safety with comfort as it allows independent living more desirable.
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
                                        <input name="pid" type="hidden" value='Aston 50" Walk-In Whilrpool Bath Tub'/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Aston 50" Walk-In Whilrpool Bath Tub<br/>$3,799</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/04.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Experience the heights of relaxation and style with the BW-10 modern emperor freestanding bathtub.
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
                                        <input name="pid" type="hidden" value="Badeloft Stone Resin Freestanding Bathtub"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Badeloft Stone Resin Freestanding Bathtub<br/>$2,590</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/05.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Mito has a unique round shape and the exterior finish may be in a beautiful shiny polish.
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
                                        <input name="pid" type="hidden" value="Inox Zero Mito Stainless Steel Modern Sink"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Inox Zero Mito Stainless Steel Modern Sink<br/>$1,495</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/06.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The asymmetrical shape is clean and geometric, lending a beautiful minimalist, yet updated, feel to the modern bathroom. 
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
                                        <input name="pid" type="hidden" value="Hannah Soaking Bathtub"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Hannah Soaking Bathtub<br/>$1,499</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/07.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Perfect for modern bathrooms. Made and designed in Italy.
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
                                        <input name="pid" type="hidden" value="40 Inch Grey Oak Bathroom Vanity Set"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">40 Inch Grey Oak Bathroom Vanity Set<br/>$1,155</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/08.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Free standing bathtub with integral overflow made of solid surface material "Korakril".
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
                                        <input name="pid" type="hidden" value="WS Bath Collections Vela VE Bathtub"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">WS Bath Collections Vela VE Bathtub<br/>$11,480</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/bathroom/09.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The Piet is fabricated from vacuum treated solid surface material hand sanded to perfection.
                                </div>
                                <div class="add-button">
                                    <form action="addtocart.php" method="get">

                                        <input name="pid" type="hidden" value="Control Brand the Piet True Solid Surface Sink Vessel"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>								
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Control Brand the Piet True Solid Surface Sink Vessel<br/>$480</p>
                </div>

            </center>
            <hr/>
            <div class="footer">
                <footer class="footer">
                    <small>
                        <b>Updated 2015 Basic company.  </b>
                    </small>
                </footer>
            </div>
        </div>
    </body>
</html>