<?
require("settings.php");
session_start();
if(!isset($_SESSION["basket"])) {
	$_SESSION["basket"]=array();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<title>Klädberget - Home</title>
	</head>
	<body>
		<div id="header">
			<a id="home" href="."></a>
			<div id="quickbasket"><p><a <?if(count($_SESSION["basket"])>0){echo('class="highlight"');}?> href="basket.php"><?echo count($_SESSION["basket"])?> item<?echo count($_SESSION["basket"])!=1?"s":"";?> in basket</a></p></div>
			<ul id="menu">
				<li><a href=".">Home</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li><a href="company.php">Company</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<div class="text">
				<h1><img src="images/h/home.png" alt="Home" /></h1>
				<p>Welcome to Klädberget, dear customer! Feel free to browse our <a href="catalogue.php">catalogue</a> for a large collection och high quality clothing.</p>
				<div id="animation"><a href="catalogue.php"><img alt="Catalogue" src="images/animation.gif" /></a></div>
			</div>	
		</div>
	</body>
</html>