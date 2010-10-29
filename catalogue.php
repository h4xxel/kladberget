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
$mysql_link=mysql_connect($db_host,$db_username,$db_password);
if(!$mysql_link) {
	die("Error: ".mysql_error());
}
$mysql_db=mysql_select_db($db_name,$mysql_link);
if(!$mysql_db) {
	die("Error: ".mysql_error());
}
function get_items() {
	global $mysql_link;
	$mysql_query=sprintf("SELECT * FROM `items`");
	$mysql_result=mysql_query($mysql_query,$mysql_link);
	while($r=mysql_fetch_assoc($mysql_result)) {
		echo '					<a href="?id='.$r["id"].'" title="'.$r["name"].'" class="product"><img src="images/thumbnails/'.$r["id"].'.jpg" alt="'.$r["id"].'" /></a>'."\n";
	}
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
<?get_items();?>
					<div class="clearer"></div>
				</div>
				<div id="presentation">
					<?php
					$mysql_query=sprintf("SELECT * FROM `items` WHERE `id`=%s",$id);
					$mysql_result=mysql_query($mysql_query,$mysql_link);
					$r=mysql_fetch_assoc($mysql_result);
					$size="<option>".str_replace(",","</option><option>",$r["size"])."</option>";
					$color="<option>".str_replace(",","</option><option>",$r["color"])."</option>";
					?>
					<h2><?echo $r["name"];?></h2>
					<h3>$<?echo number_format($r["price"],$decimals=2);?></h3>
					<img src="images/products/<?echo $id;?>.jpg" alt="<?echo $id;?>" />
					<p><?echo $r["description"];?></p>
					<form id="add" action="basket.php" method="get">
						<ul>
							<li><label for="amount">Amount:</label></li>
							<li><input id="amount" type="text" name="amount" value="1" /></li>
							<li><label for="size">Size:</label></li>
							<li><select name="size" id="size"><?echo $size;?></select></li>
							<li><label for="color">Color:</label></li>
							<li><select name="color" id="color"><?echo $color;?></select></li>
							<li><input type="hidden" name="id" value="<?echo $id;?>" /><input type="hidden" name="action" value="add" /><input type="submit" value="Add to basket" /></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>