<?php
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
		<title>Klädberget - Catalogue</title>
	</head>
	<body>
		<div id="header">
			<a id="home" href="."></a>
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
							<li><label for="count">Amount:</label></li>
							<li><input id="count" type="text" name="id" value="1" /></li>
							<li><input type="hidden" name="action" value="add" /><input type="submit" value="Add to basket" /></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>