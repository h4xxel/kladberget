<?php
require("settings.php");
session_start();
if(!isset($_SESSION["basket"])) {
	$_SESSION["basket"]=array();
}
if(!isset($_GET["id"])) {
	$id=1;
} elseif(($_GET["id"]>12)||($_GET["id"]<1)) {
	$id=1;
} else {
	$id=$_GET["id"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<title>Klädberget - Catalogue</title>
	</head>
	<body>
		<div id="header">
			<a id="home" href="."></a>
			<div id="quickbasket"><p><a href="basket.php"><?echo count($_SESSION["basket"])?> item<?echo count($_SESSION["basket"])!=1?"s":"";?> in basket</a></p></div>
			<ul id="menu">
				<li><a href=".">Home</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li><a href="company.php">Company</a></li>
				<li><a href="mailto:email@kladberget.com">Contact</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<div class="text">
				<h1>Catalogue</h1>
				<div id="selector">
					<?for($i=1;$i<=12;$i++) {echo '<a href="?id='.$i.'" class="product"><img src="images/thumbnails/'.$i.'.jpg" alt="'.$i.'" /></a>';}?>
					<div class="clearer"></div>
				</div>
				<div id="presentation">
					<h2>Hat</h2>
					<img src="images/products/<?echo $id;?>.jpg" alt="<?echo $id;?>" />
					<p>This high-quality hat is <em>awesome</em>.</p>
					<form id="add" action="basket.php" method="get">
						<ul>
							<li><label for="amount">Amount:</label></li>
							<li><input id="amount" type="text" name="amount" value="1" /></li>
							<li><label for="size">Size:</label></li>
							<li><select name="size" id="size"><option>S</option><option>M</option><option>L</option><option>XL</option></select></li>
							<li><label for="color">Color:</label></li>
							<li><select name="color" id="color"><option>White</option><option>Black</option><option>Red</option><option>Blue</option><option>Green</option><option>Yellow</option></select></li>
							<li><input type="hidden" name="id" value="<?echo $id;?>" /><input type="hidden" name="action" value="add" /><input type="submit" value="Add to basket" /></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>