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
                <h1 class="main-title">LIGHTING</h1>
                <img src="/light_main.png" class="main" />
            </center>
            <hr/>
            <center class="container">
                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/01.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Fill in your room with a wide array of gleaming light coming from this wonderful Bohr Ceiling Fixture.
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
                                        <input name="pid" type="hidden" value="Bohr Ceiling Fixture Ceiling Fixture"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Bohr Ceiling Fixture Ceiling Fixture<br/>$768</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/02.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The three poles hold a metal ring with a frosted glass downlight inset, upon which the frosted glass shade rests.
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
                                        <input name="pid" type="hidden" value="Adesso Hayley Shelf Floor Lamp"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Adesso Hayley Shelf Floor Lamp<br/>$160</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/03.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Fill in your room with a wide array of gleaming light coming from this wonderful Snowfall Table Lamp.
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
                                        <input name="pid" type="hidden" value="Snowfall Table Lamp Table Lamp"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Snowfall Table Lamp Table Lamp<br/>$275</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/04.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The Strata collection features ribbed blown glass in a clean, modern shape.
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
                                        <input name="pid" type="hidden" value="Strata 3-Light Chandelier In Polished Chrome"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Strata 3-Light Chandelier In Polished Chrome<br/>$484</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/05.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Each Mimosa lamp has a frosted glass elongated flute-shaped shade with metal base. Available in satin steel with white frosted glass. 
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
                                        <input name="pid" type="hidden" value="Adesso Mimosa Torchiere"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Adesso Mimosa Torchiere<br/>$166</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/06.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    With its lustrous contemporary aesthetic, NOVA's Equilibrium Collection is the perfect home accessory to transform any space.
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
                                        <input name="pid" type="hidden" value="Equilibrium, Table Lamp"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Equilibrium, Table Lamp<br/>$310</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/07.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Chrome plating and pecan-colored wood intertwine to create NOVA's Serpentine floor lamp, characterized by its unique curvilinear shape. 
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
                                        <input name="pid" type="hidden" value="Serpentine, Floor Lamp"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Serpentine, Floor Lamp<br/>$448</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/08.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The Orbital Pendant Collection is featured in a Polished Chrome finish with ribbed glass to complement.
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
                                        <input name="pid" type="hidden" value="Orbital 1-Light Pendant In Polished Chrome"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Orbital 1-Light Pendant In Polished Chrome<br/>$150</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/lighting/09.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    These telescoping modified arc lamps have a satin steel finish with an adjustable white linen shade. 
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
                                        <input name="pid" type="hidden" value="Adesso Bonnet Floor Lamp"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Adesso Bonnet Floor Lamp<br/>$150</p>
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