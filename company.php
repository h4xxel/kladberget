<?php
require("settings.php");
session_start();
if(!isset($_SESSION["basket"])) {
	$_SESSION["basket"]=array();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<title>Klädberget - Company</title>
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
				<h1>Company Profile</h1>
				<p>Klädberget offers distinctive clothing, and home furnishings for today's active, casual lifestyle through three retailing concepts: Klädberget®, A|K|A Klädberget™ and Klädberget Home™. In its 79-year history, Klädberget has evolved from a single store in Gävle to an international company with more than 600 stores, 120 million catalogues and its website, <a href=".">www.kladberget.com</a>. Klädberget operates in Scandinavia, USA and Canada, and through joint venture partnerships in Japan, Germany and UK.</p>
				<h2>Klädberget Sportswear</h2>
				<p>Sportswear for the active, casual lifestyle of men and women represents the core of the Klädberget business. Renowned for its outerwear, today's Klädberget also offers full seasonal collections of fine quality sportswear, footwear, travel gear and accessories. Klädberget brand merchandise is available in 434 sportswear stores in Scandinavia and North America as well as through 11 annual catalogues and online at <a href=".">www.kladberget.com</a>. Klädberget sportswear is also sold through joint venture partnerships in Japan, Germany and UK.</p>
				<h2>Klädberget Home</h2>
				<p>Bringing the casual, relaxed comfort of Klädberget sportswear to the home is the philosophy behind the collection of home furnishings and decor. Seasonal collections and long-standing favorites include fine natural wood and upholstered furniture, tabletop, decor items, gift items plus linens for bed, including Klädberget's famous flannel and down products, and luxurious bath products from towels to Aromatherapy. Klädberget Home products are offered through 40 stores in the United States, catalogues and on the web at <a href=".">www.kladberget.com</a>.</p>
			</div>	
		</div>
	</body>
</html>