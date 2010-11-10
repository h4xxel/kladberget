<?
require("settings.php");
session_start();
if(!isset($_SESSION["basket"])) {
	$_SESSION["basket"]=array();
}
$mysql_link=mysql_connect($db_host,$db_username,$db_password);
if(!$mysql_link) {
	die("Error: ".mysql_error());
}
$mysql_db=mysql_select_db($db_name,$mysql_link);
if(!$mysql_db) {
	die("Error: ".mysql_error());
}
function display_basket() {
	global $mysql_link;
	$sum=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
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
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<div class="text">
				<h1>Your shopping basket</h1>
				<?if(count($_SESSION["basket"])) {?><p><a href="basket.php?action=clear">Empty basket</a></p>
				<table>
					<tr><th>&nbsp;</th><th>Name</th><th>Amount</th><th>Size</th><th>Color</th><th>Part price</th><th>Total</th></tr>
					<?foreach($_SESSION["basket"] as $i => $a) {$mysql_query=sprintf("SELECT * FROM `items` WHERE `id`=%s",$a["id"]); $mysql_result=mysql_query($mysql_query,$mysql_link); $r=mysql_fetch_assoc($mysql_result);echo "<tr><td>".'<a href="?id='.$a["id"].'" class="product"><img src="images/thumbnails/'.$a["id"].'.jpg" alt="'.$a["id"].'" /></a>'.'</td><td><a href="catalogue.php?id='.$a["id"].'">'.$r["name"].'</a></td><td>'.$a["amount"]."</td><td>".$a["size"]."</td><td>".$a["color"].'</td><td>$'.number_format($r["price"],$decimals=2).'</td><td class="total">$'.number_format($r["price"]*$a["amount"],$decimals=2).'</td></tr>'; $sum+=($r["price"]*$a["amount"]);}?>
				</table>
				<h2 class="total">Total: $<?echo number_format($sum,$decimals=2);?></h2><?}else{echo "<p>Your shopping basket is empty!</p>";}?>
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