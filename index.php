<!DOCTYPE html>
<html>
	<head>
		<title>PHP Localize and Translate</title>
		<style>
			.menuitem{
				display: inline-block;
				margin: 0 auto;
				padding: 20px;
				background-color: black;
				color: white;
				cursor: pointer;
			}
			.menuitem:hover{
				background-color: blue;
			}
		</style>
	</head>
	<body>
		<?php
		
		$sitelang = "en";
		
		if(isset($_GET["en"])){
			$sitelang = "en";
		}
		if(isset($_GET["id"])){
			$sitelang = "id";
		}
		if(isset($_GET["fr"])){
			$sitelang = "fr";
		}
		
		include("phplocalize.php");
		
		?>
		<div class="menuitem"><?php uilang("Home") ?></div>
		<div class="menuitem"><?php uilang("Dashboard") ?></div>
		<div class="menuitem"><?php uilang("Logout") ?></div>
		<div class="menuitem"><?php uilang("Login") ?></div>
		
		<p><?php uilang("Site language"); ?>: <a href="?en">English</a> | <a href="?fr">French</a> | <a href="?id">Bahasa Indonesia</a></p>
	</body>
</html>