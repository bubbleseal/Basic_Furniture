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
                <h1 class="main-title">LIVING ROOM</h1>
                <img src="/living_main.png" class="main"/>
            </center>
            <hr/>
            <center class="container">
                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/01.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Uttermost's armchairs combine premium quality materials with unique high-style design.
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
                                        <input name="pid" type="hidden" value="Uttermost Quintus Linen Armchair"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>	
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Uttermost Quintus Linen Armchair<br/>$712</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/02.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Chrome metal base with gloss white, crocodile-embossed, polyurethane tabletop.
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
                                        <input name="pid" type="hidden" value="Uttermost Bjorn Modern Console Table"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Uttermost Bjorn Modern Console Table<br/>$657</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/03.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    This high-gloss white end table has a cone-shaped base, round top, and polyester and acrylic finish for added durability.
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
                                        <input name="pid" type="hidden" value="Tower End Table"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Tower End Table<br/>$146</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/04.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Cushions covering in genuine leather ther front, sides and back, with a polished stainless steel frame. Polished Stainless Steel Frame Assembled.
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
                                        <input name="pid" type="hidden" value="Fine Mod Imports Cube Lc2 Petit Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Fine Mod Imports Cube Lc2 Petit Sofa<br/>$799</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/05.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Clean lines and chrome legs give this versatile Siena Sofa its sleek, contemporary look.
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
                                        <input name="pid" type="hidden" value="Siena Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Siena Sofa<br/>$340</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/06.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    The Liberty nesting tables feature a round clear glass top with curved iron rod bodies, and are completed with a classic antique nickel finish. 
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
                                        <input name="pid" type="hidden" value="Liberty Nesting Tables"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Liberty Nesting Tables<br/>$228</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/07.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Luxurious leatherette and ample seating room are the hallmark of this extremely comfortable chair, the Saddlebrook Lounger. 
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
                                        <input name="pid" type="hidden" value="Saddlebrook Lounger"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Saddlebrook Lounger<br/>$234</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/08.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Align comes generously padded and upholstered in bonded leather, with slight button tufting and trim for only the gentlest effect.
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
                                        <input name="pid" type="hidden" value="Align Leather Corner Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Align Leather Corner Sofa<br/>$615</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/09.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Create a simple, sleek look in your living or dining room using the versatile Malta Sofa.
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
                                        <input name="pid" type="hidden" value="Malta Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Malta Sofa<br/>$487</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/10.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Medium rise, deep channel back forms a graceful curve with a slightly splayed pitch for relaxed comfort.
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
                                        <input name="pid" type="hidden" value="Uttermost Teraj White Velvet Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Uttermost Teraj White Velvet Sofa<br/>$1,207</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/11.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    Cushions filled with high resilient foam covered with natural down feathers.
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
                                        <input name="pid" type="hidden" value="Kubo 4 Seater Sofa"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Kubo 4 Seater Sofa<br/>$6,820</p>
                </div>

                <div class="ind-container">
                    <div id="image">
                        <a>
                            <span class="logo_icon">
                                <img  class="img" src="/living/12.jpg"/>
                            </span>

                            <span class="text">
                                <div class="text-con">
                                    These sleek nesting tables are an ideal complement to virtually any modern space.
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
                                        <input name="pid" type="hidden" value="Bella White Mirrored Nesting Tables"/>
                                        <input type="submit" value="Add to Cart" class="add"/>
                                    </form>
                                </div>
                            </span>
                        </a>
                    </div>
                    <p class="description">Bella White Mirrored Nesting Tables<br/>$689</p>
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