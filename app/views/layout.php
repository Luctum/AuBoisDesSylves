<!DOCTYPE html>
<html>
	<head>
		<title>Au Bois des Sylves - Boutique d'objets de type bois</title>
		<link rel="stylesheet" href="./public/css/style.css"/>
		<link rel="stylesheet" href="./public/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="./public/css/foundation.min.css"/>
	</head>
<body>
	<div class="top">
		<header>
			<div class="row">
				<div class="small-5 columns"><h4>Au Bois des Sylves</h4></div>
		  		<div class="small-5 columns">
					<ul class="menu">
				        <li><input type="search" placeholder="Rechercher un article"></li>
				        <li><button type="button" class="secondary button">Search</button></li>
					</ul>
		  		</div>
		  		<div class="small-2 columns">
		  			<ul class="menu">
				        <li><button class="secondary button" data-toggle="user-menu-drop"><i class="fa fa-user"></i></button></li>
					    <li><button class="secondary button"><i class="fa fa-shopping-cart"></i></button></li>
					</ul>
		  		</div>
			</div>
		</header>
		<nav>
			<div class="row">
				<ul class="vertical medium-horizontal menu">
                    <li><a href="#">Accueil</a></li>
                    <?php
                    foreach($categories as $category){ ?>
					  <li><a href="#"><?= $category->getName(); ?></a></li>
                    <?php } ?>
				</ul>
			</div>
		</nav>
	</div>

    <footer><?= $content ?></footer>

<script type="text/javascript" src="../../public/js/vendor/jquery.js"></script>
<script type="text/javascript" src="../../public/js/vendor/foundation.min.js"></script>
<script type="text/javascript" src="../../public/js/app.js"></script>

</body>
</html>
