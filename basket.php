<?
require("settings.php");
session_start();
if(!isset($_SESSION["basket"])) {
	$_SESSION["basket"]=array();
}
function display_basket() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<title>Klädberget - Your Basket</title>
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
				<h1>Your shopping basket</h1>
				<?if(count($_SESSION["basket"])) {?><p><a href="basket.php?action=clear">Clear basket</a></p>
				<table>
					<tr><th>&nbsp;</th><th>ID</th><th>Amount</th><th>Size</th><th>Color</th></tr>
					<?foreach($_SESSION["basket"] as $i => $a) {echo "<tr><td>".'<a href="?id='.$a["id"].'" class="product"><img src="images/thumbnails/'.$a["id"].'.jpg" alt="'.$a["id"].'" /></a>'.'</td><td><a href="catalogue.php?id='.$a["id"].'">'.$a["id"].'</a></td><td>'.$a["amount"]."</td><td>".$a["size"]."</td><td>".$a["color"]."</td></tr>";}?>
				</table><?}else{echo "<p>Your shopping basket is empty!</p>";}?>
			</div>	
		</div>
	</body>
</html>
<?
}
switch($_GET["action"]) {
case "add": $_SESSION["basket"][]=array("id" => $_GET["id"], "amount" => $_GET["amount"], "color" => $_GET["color"], "size" => $_GET["size"]); header("Location: catalogue.php?id=".$_GET["id"]); break;
case "remove": unset($_SESSION["basket"][$_GET["id"]]); header("Location: basket.php"); break;
case "clear": unset($_SESSION["basket"]); header("Location: basket.php"); break;
default: display_basket(); break;
}
?>