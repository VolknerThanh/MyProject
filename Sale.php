<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Shoes || DiscoverYourself</title>
	<link rel="shortcut icon" href="img/Logo.ico">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<!-- CSS -->
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/size.css">
	<link rel="stylesheet" href="styles/images.css">
	
	<!-- JQuery -->
	<script src="lib/jquery-3.2.1.min.js"></script>
	<script src="lib/script.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	
	<menu type="context toolbar" class="menu">
		<div>
			<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Product</a>
				<ul class="submenu">
					<li><a href="NewProducts.php">New</a></li>
					<li><a href="Sale.php">Sale-off</a></li>
				</ul>
			</li>
			<li><a href="#">Women</a>
				<ul class="submenu">
					<li><a href="Shoes_Nike.php">Nike</a></li>
					<li><a href="Shoes_Converse.php">Converse</a></li>
					<li><a href="Shoes_Adidas.php">Adidas</a></li>
					<li><a href="Shoes_Ananas.php">Ananas</a></li>
					<li><a href="Shoes_Hunter_Female.php">Hunter</a></li>
				</ul>
			</li>
			<li><a href="#">Men</a>
				<ul class="submenu">
					<li><a href="Shoes_Nike.php">Nike</a></li>
					<li><a href="Shoes_Converse.php">Converse</a></li>
					<li><a href="Shoes_Adidas.php">Adidas</a></li>
					<li><a href="Shoes_Ananas.php">Ananas</a></li>
					<li><a href="Shoes_Hunter_Male.php">Hunter</a></li>
				</ul>
			</li>
		</div>
	</menu>

	<div class='container'>

		<main>

			<header>
				<h1>Sale Off</h1>
			</header>

			<!-- Product list -->



			<div class="productList">
				<?php 
					include ("database/allshoesDB.php");
					$product = getAllShoes();
					$index = 0;
					$tag = "";
					foreach ($product as $value) {
						if($value["price"] > 2800000) {
							$aftersale = $value["price"] * 10 / 100;
							$value["price"] = $value["price"] - $aftersale;
				?>
				<div class="product">
					<img src='<?php echo $value["img"]?>' alt="<?php echo $value["name"]?>">
					<div class="productInfo">
						<div class="productTitle">
							<h3><?php echo $value["name"]?></h3>
							<?php 
								if($value["status"] == "new"){ 
							?>
								<h4><?php echo $value["status"];?></h4>
							<?php	
								}
							?>
						</div>
						<p style="text-decoration: line-through;"><?php echo $value["cost"]?> $</p>
						<p>after sale: <?php echo $value["price"]?> $</p>
						<?php
							$tag = $value["tag"];
						?>
						<a class="JumpToPage" href="getInfo.php?id=<?php echo $index?>&name=<?php echo $tag?>&requiredDB=all&site=sale&newprice=<?php echo $value['price']?>">
							<div class="BuyIt" >Buy now</div>
						</a>
					</div>
				</div>
				<br>
				<?php
						}
						$index += 1;
					}
				?>
			</div>


		</main>
	
		
	</div>

	<footer id="footer">
		
		<div id="footer-left">
			<img src="img/Logo.jpg" style="width: 70%;" alt="logo">
		</div>
		<div id="footer-center-left">
			<h3 style="color: #23474c;"><span class="fa fa-info-circle"></span> Helpful information:</h3>
			<a href="size.html">Check foot size</a><br>
			<a href="#">Check guarantee</a><br>
			<a href="#">Exchange Rules</a><br>
			<a href="#">Ohter shops</a>
		</div>
		<div id="footer-center-right">
			<h3 style="color: #23474c;"><span class="fa fa-phone-square"></span> Contact</h3>
			<span>0120 890 4612</span><br>
			<span>0120 756 4769</span><br>
		</div>
		<div id="footer-right">
			<h2 style="font-weight: 600;">Follow us</h2>
			<br>
			<a href="https://www.facebook.com/GoldenSunny.vn/" target="_blank"><span style="font-size:25px; padding-right: 10px;" class="fa fa-facebook-square"></span></a>
			<a href="https://twitter.com/Volkner7" target="_blank"><span style="font-size:25px; padding-right: 10px;" class="fa fa-twitter-square"></span></a>
			<a href="https://www.instagram.com/rainsilver_/" target="_blank"><span style="font-size:25px; padding-right: 10px;" class="fa fa-instagram"></span></a>
			<a href="https://www.youtube.com/channel/UCrp73TyEUkP7BUQsbcTkorw" target="_blank"><span style="font-size:25px; padding-right: 10px;" class="fa fa-youtube-square"></span></a>
		</div>

		<p id="footer-bottom">&copy; copyright 2017 YourShoes. All Rights Reserved</p>
	</footer>
</body>
</html>