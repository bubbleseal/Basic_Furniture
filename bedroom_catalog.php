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
				<h1 class="main-title">BEDROOM</h1>
				<img src="/bedroom_main.png" class="main"/>
			</center>
			<hr/>
			<center class="container">
				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/01.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
								Featuring dark gray leather upholstery and stainless steel framework, this queen-size bed frame is sleek and sophisticated. 
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Vertu Bed"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Vertu Bed<br/>$1,679</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/02.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
								Greenington offers a fresh contemporary look with just the right amount of Mid-Century Modern.
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Azara Five Drawer Chest"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Azara Five Drawer Chest<br/>$1,873</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/03.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									This dresser has a high-gloss white finish and a clean rectangular design. Its gliding top surface extends outward to form a side table or bookshelf. 
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Savvy Extension Dresser"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Savvy Extension Dresser<br/>$1,259</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/04.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Featuring a tufted headboard, charcoal gray polyester fabric, and stainless steel feet, this king-size bed frame is simple and elegant. 
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Fresca Bed"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Fresca Bed<br/>$1,364</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/05.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									The roomy drawer gives a place to stow reading glasses or a book, while the two open shelves provide an airy display space.
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Coastal Living Resort-Tranquility Isle Night Stand"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Coastal Living Resort-Tranquility Isle Night Stand<br/>$739</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/06.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Featuring white leatherette upholstery and a square panel design on the headboard, this queen-size bed frame is sleek and sophisticated.
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Glare Bed"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Glare Bed<br/>$1,469</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/07.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Aluminum-wrapped solid wood drawer fronts with side finger pulls and an undermounted door slide give this piece a clean minimalist look.
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="LAXseries Low Boy Dresser"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">LAXseries Low Boy Dresser<br/>$1,964</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/bedroom/08.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Carved rosettes on the aptly named Rosette Bedside Table punctuate the three generous fixed shelves of this beautifully accommodating piece.
								</div>
								<div class="add-button">
									<form action="addtocart.php" method="get">
										<div style="padding-bottom:10px;">
											<select name="qty">
												<?php 
												for($i=1; $i<12; $i++) 
												{ 
													echo '<option value='.$i.'>'.$i.'</option>'; 
												} 
												?> 
											</select>
										</div>
										<input name="pid" type="hidden" value="Charleston Regency-Rosette Bedside Table"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Charleston Regency-Rosette Bedside Table<br/>$889</p>
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