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
					<li><a href="#">New</a></li>
					<li><a href="#">Sale-off</a></li>
				</ul>
			</li>
			<li><a href="#">Women</a>
				<ul class="submenu">
					<li><a href="Shoes_Nike.php">Nike</a></li>
					<li><a href="Shoes_Converse.php">Converse</a></li>
					<li><a href="Shoes_Adidas.php">Adidas</a></li>
					<li><a href="Shoes_Ananas.php">Ananas</a></li>
					<li><a href="#">Hunter</a></li>
				</ul>
			</li>
			<li><a href="#">Men</a>
				<ul class="submenu">
					<li><a href="Shoes_Nike.php">Nike</a></li>
					<li><a href="Shoes_Converse.php">Converse</a></li>
					<li><a href="Shoes_Adidas.php">Adidas</a></li>
					<li><a href="Shoes_Ananas.php">Ananas</a></li>
					<li><a href="">Hunter</a></li>
				</ul>
			</li>
		</div>
	</menu>

	<?php			
		include ("database.php");
		$nike = getNike();
		$adidas = getAdidas();
		$converse = getConverse();
		$ananas = getAnanas();

		$index = $_GET['id'];
		$tag = $_GET['name'];
		if($tag == "nike")
			$product = $nike[$index];
		else if($tag == "adidas")
			$product = $adidas[$index];
		elseif ($tag == "converse")
			$product = $converse[$index];
		elseif ($tag == "ananas")
			$product = $ananas[$index];

	?>

	<main>
		<div class="PaymentContainer">
			<table class="productShowTable">
				<caption>Your Product</caption>
				<tbody>
					<tr>
						<td>
							<img src='<?php echo $product["img"]?>' alt="<?php echo $product["name"]?>">
						</td>
						<td bgcolor="#ddd">

							<p id="titleOfproduct"><?php echo $product['name']?></p>


							<span>Price : <?php echo $product['cost']?>$</span>

							<br>
							Shoes type : 
							<a href="Shoes_Nike.php" style="text-decoration: none;">
								<span class="Tagbar">
									<?php echo $product['tag'] ?>
								</span>
							</a>


							<form>
								<label style="font-size: 20px;">Choose your foot size : </label>
								<select name="footsize">
									<option value="">35</option>
									<option value="">36</option>
									<option value="">37</option>
									<option value="">38</option>
									<option value="">39</option>
									<option value="">40</option>
									<option value="">41</option>
									<option value="">42</option>
									<option value="">43</option>
									<option value="">44</option>
									<option value="">45</option>
								</select>
								<br>
								<a href="size.html" title="check foot size" target="_blank">Check your foot size</a>
							</form>

							<br>
								
							<div>
								<section class="buttons">
									<div class="button-container" style="background-color: black; text-align: center;">
										<a href="" class="btn btn-5">
											Add to cart
										</a>
									</div>
								</section>
								
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</main>

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







