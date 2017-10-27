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
				<h1 class="main-title">KITCHEN & DINING</h1>
				<img src="/kitchen_main.png" class="main"/>
			</center>
			<hr/>
			<center class="container">
				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/cab_01.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
								Adjustable shelves allow you to configure each of the six levels in order to suit your needs.
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
										<input name="pid" type="hidden" value="Elite Stacking Storage Combo Set"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>
								</div>
							</span>
						</a>
					</div>
					<p class="description">Elite Stacking Storage Combo Set<br/>$369</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img class="img" src="/kitchen/chair_02.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
								Upholstered in solid black leather with a square back, this chair is understated and sophisticated. Display it among modern decor for a cohesive feel.
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
										<input name="pid" type="hidden" value="Fluer Dining Chair"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Fluer Dining Chair<br/>$251</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img class="img" src="/kitchen/table_01.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Sleek and modern in all White, the Stone-T 200 Rectangular Table is a versatile design suitable for both indoor and outdoor dining.
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
										<input name="pid" type="hidden" value="Stone Table White"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Stone Table White<br/>$1,612</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/chair_03.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									The simple elegance of the Fuji belies its astonishing comfort with backrest support a thick padded leatherette cushion.
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
										<input name="pid" type="hidden" value="Fuji Stacker Counter Stool"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Fuji Stacker Counter Stool<br/>$94</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/cab_03.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Greenington combines beautiful design, rich color, and a winning sustainability story.
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
										<input name="pid" type="hidden" value="Babyletto Storage Unit Open Cupboard"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Babyletto Storage Unit Open Cupboard<br/>$100</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/table_04.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									The Discovery Extension Table is modern to the core, boasting a clean and sleek design that elegantly complements many dining room interiors.
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
										<input name="pid" type="hidden" value="Discovery Table"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Discovery Table<br/>$2,248</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/chair_05.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									A rich leatherette finish hugs the curves of the upscale Viva Bar Stool which comes with a polished stainless steel base and adjustable pole.
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
										<input name="pid" type="hidden" value="Viva Bar Stool Regenerated Leather"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Viva Bar Stool Regenerated Leather<br/>$252</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/table_03.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Made of a Polyethyline Frame and featuring a cement Ballast, this table is sturdy and functional while maintaining its smooth white silhouette.
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
										<input name="pid" type="hidden" value="Compass Table"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Compass Table<br/>$558</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/chair_04.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									The chair of Domitalia that has won more awards than any other. You can use this amazing chair designed by Orlandini & Radice indoor and outdoor.
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
										<input name="pid" type="hidden" value="Phantom Chair"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Phantom Chair<br/>$422</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/table_06.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									Ideal for the dining room or kitchen nook, this Italian-made pedestal table is as versatile as it is aesthetically-pleasing.
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
										<input name="pid" type="hidden" value="Corona Table"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Corona Table<br/>$916</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/table_05.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									This incredible table designed by Adriano Balutto can extend from 63" to 10'-2" and can seat 14 people when opened.
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
										<input name="pid" type="hidden" value="Universe Table"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">Universe Table<br/>$2,038</p>
				</div>

				<div class="ind-container">
					<div id="image">
						<a>
							<span class="logo_icon">
								<img  class="img" src="/kitchen/cab_02.jpg"/>
							</span>

							<span class="text">
								<div class="text-con">
									This elegant and practical food storage pantry is the perfect fit for your needs. The storage spaces make it ideal for putting food and kitchen accessories.
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
										<input name="pid" type="hidden" value="South Shore Fiesta Storage Pantry in Pure White"/>
										<input type="submit" value="Add to Cart" class="add"/>
									</form>								
								</div>
							</span>
						</a>
					</div>
					<p class="description">South Shore Fiesta Storage Pantry in Pure White<br/>$129</p>
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