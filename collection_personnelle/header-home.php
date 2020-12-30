<!DOCTYPE html>
	<html lang="en" xmlns:og="http://ogp.me/ns#">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content="montres, vente, montre, vintage, france, avignon, collection, personnelle, watch, watches, sell, personal">
			<meta property="og:image" content="https://collectionpersonnelle.com/wp-content/themes/collection_personnelle/img/logo/logo_facebook.png">
			<title>Collection Personnelle</title>
			<meta name="description" content="Collection Personnelle provides vintage watches adressing collectors and enthusiasts. Every piece is carefully chosen through selective criteria.">
			<meta name="author" content="Julien Leopold">
			<meta name="copyright" content="Collection Personnelle">
			<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/logo/logo_tab.png">
			<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/logo/logo_apple.png">
			<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/logo/logo_apple.png">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/headerHome.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/headerMenu.js"></script>
			<?php wp_head(); ?>
		</head>

		<body id="top" onload="loader()">
			<div class="contener_general" id="load">
				<div class="contener_mixte">
					<div class="ballcolor ball_1">&nbsp;</div>
				</div>
				<div class="contener_mixte">
					<div class="ballcolor ball_2">&nbsp;</div>
				</div>
				<div class="contener_mixte">
					<div class="ballcolor ball_3">&nbsp;</div>
				</div>
				<div class="contener_mixte">
					<div class="ballcolor ball_4">&nbsp;</div>
				</div>
			</div>

			<div id="blockPage">

				<!--- HEADER (LOGO + MENU) -->
				<header id="header">
					<!-- BARRE DE RECHERCHE -->
					<div id="wrap">
						<form action="<?= home_url( '/' ) ?>" method="get" autocomplete="off">
    						<input type="search" name="s" title="Search" class="searchLogo searchLogoWhite" id="searchLogo">
						</form>
					</div>

					<!--- LOGO -->
					<div class="logoHeader" id="logoHeaderDiv">
						<a href="#blockPage" id="logoHeader">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_logo_header_transparent.png" alt="collection personnelle logo" id="logoHomeTransparent">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_logo_header.png" alt="collection personnelle logo" id="logoHomeBlack">
						</a>
					</div>

					<!--- MENU (RENVOYANT AUX DIFFERENTES SECTIONS) -->
					<div id="burger">
						<div class="burger" id="burgerLine1"></div>
						<div class="burger" id="burgerLine2"></div>
						<div class="burger" id="burgerLine3"></div>
					</div>

					<nav id="navigation" role="navigation">
						<a href="javascript:void(0)" class="closebtn" id="closebtn">&times;</a>
						<ul class="menu" id="menu">
							<li class="dropdown dropdownCollection mainMenuList">
								<button class="dropbtn" id="dropbtn">
									<span data-toggle = "dropdown" id="collectionId">COLLECTION<i class="fas fa-chevron-right" id="rightArrow"></i></span>
								</button>
								<span id="dropdownList" class="dropdown-content">
									<ul class="dropdown-menu dropdown-menu-collection">
										<li><a href="/watches" id="watchesId">Watches</a></li>
										<li><a href="/straps" id="strapsId">Straps</a></li>
										<!--<li><a href="/art-design" id="antiquesId">Art & Design</a></li>
										<li><a href="/portfolio" id="portfolioId">Portfolio</a></li>-->
									</ul>
								</span>
							</li>
							<span class="restMenu" id="restMenu">
								<li class="mainMenuList"><a href="/about" id="aboutId">ABOUT</a></li>
								<li class="mainMenuList"><a href="/articles" id="articlesId">ARTICLES</a></li>
								<li class="mainMenuList">
									<button class="dropbtn dropbtnBuySell" id="dropbtnBuySell">
										<span data-toggle = "dropdown" id="buySellId">BUY & SELL<i class="fas fa-chevron-right" id="rightArrowBuySell"></i></span>
									</button>
									<span id="dropdownListBuySell" class="dropdown-content">
										<ul class="dropdown-menu dropdown-menu-buy-sell">
											<li><a href="/buy" id="buyId">How to buy</a></li>
											<li><a href="/sell" id="sellId">How to sell</a></li>
											<li><a href="/shipping" id="shippingId">Shipping</a></li>
										</ul>
									</span>
								</li>
								<span class="restMenuBuySell" id="restMenuBuySell">
									<li class="mainMenuList">
										<button class="dropbtn dropbtnContact" id="dropbtnContact">
											<span data-toggle="dropdown" id="contactId">CONTACT<i class="fas fa-chevron-right" id="rightArrowContact"></i></span>
										</button>
										<span id="dropdownListContact" class="dropdown-content">
											<ul class="dropdown-menu dropdown-menu-contact">
												<li><a href="https://api.whatsapp.com/send?phone=33617434686&text=Hello%20Collection%20Personnelle" target="_blank">Whatsapp</a></li>
												<li><a href="/contact">Mail</a></li>
											</ul>
										</span>
									</li>
									<span class="restMenuContact" id="restMenuContact">
										<li class="mainMenuList">
											<button class="dropbtn dropbtnFollow" id="dropbtnFollow">
												<span data-toggle="dropdown" id="followId">FOLLOW<i class="fas fa-chevron-right" id="rightArrowFollow"></i></span>
											</button>
											<span id="dropdownListFollow" class="dropdown-content">
												<ul class="dropdown-menu dropdown-menu-follow">
													<li><a href="https://www.instagram.com/collection.personnelle/" target="_blank">Instagram</a></li>
													<li><a href="https://www.facebook.com/collectionpersonnelle.co/?ref=settings" target="_blank">Facebook</a></li>
													<li><a href="https://linkedin.com/in/clément-mazarian-8ab727170" target="_blank">Linkedin</a></li>
												</ul>
											</span>
										</li>
									</span>
									<span class="restMenuFollow" id="restMenuFollow">
										<li class="mainMenuList">
											<button class="dropbtn dropbtnLegal" id="dropbtnLegal">
												<span data-toggle="dropdown" id="legalId">LEGAL<i class="fas fa-chevron-right" id="rightArrowLegal"></i></span>
											</button>
											<span id="dropdownListLegal" class="dropdown-content">
												<ul class="dropdown-menu dropdown-menu-legal">
													<li><a href="/privacy" id="privacyId">Privacy</a></li>
													<li><a href="/terms" id="termsId">Terms & Conditions</a></li>
												</ul>
											</span>
										</li>
									</span>
								</span>
							</span>
						</ul>
					</nav>
				</header>

				<!-- OVERLAY MENU -->
				<div id="overlay"></div>

				<!-- CONTENU DE LA PAGE -->
				<div class="container" id="container">