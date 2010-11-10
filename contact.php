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
			<div id="quickbasket"><p><a href="basket.php"><?echo count($_SESSION["basket"])?> item<?echo count($_SESSION["basket"])!=1?"s":"";?> in basket</a></p></div>
			<ul id="menu">
				<li><a href=".">Home</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
				<li><a href="company.php">Company</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<div class="text">
				<h1>Contact Us</h1>
				<table>
					<tr>
						<td><img src="images/people/arne.jpg" alt="Arne Lack" /></td><td><h2>CEO</h2><h3>Arne Lack</h3><a href="mailto:arne.lack@kladberget.com">Mail</a></td>
					</tr>
					<tr>
						<td><img src="images/people/olof.jpg" alt="Olof Mastorsson" /></td><td><h2>Sales Manager</h2><h3>Olof Mastorsson</h3><a href="mailto:olof.mastorsson@kladberget.com">Mail</a></td>
					</tr>
					<tr>
						<td><img src="images/people/walter.jpg" alt="Walter Glassberg" /></td><td><h2>Senior Salesman</h2><h3>Walter Glassberg</h3><a href="mailto:walter.glassberg@kladberget.com">Mail</a></td>
					</tr>
					<tr>
						<td><img src="images/people/monika.jpg" alt="Monika Ohly" /></td><td><h2>Customer Support</h2><h3>Monika Ohly</h3><a href="mailto:monika.ohly@kladberget.com">Mail</a></td>
					</tr>
				</table>
			</div>	
		</div>
	</body>
</html>