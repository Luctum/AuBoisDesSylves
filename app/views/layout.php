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
				        <li><button class="secondary button" data-open="connectModal" data-toggle="user-menu-drop"><i class="fa fa-user"></i></button></li>
                        <!-- Login Modal -->
                        <div class="reveal" data-animation-in="fade-in fast" data-animation-out="fade-out fast" id="connectModal" aria-labelledby="exampleModalHeader11" data-reveal>
                            <h4 id="connexion">Connexion</h4>
                            <hr/>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <button class="alert button"><i class="fa fa-google"></i> Connexion avec Google</button>
                                    <button class="button"><i class="fa fa-facebook"></i> Connexion avec Facebook</button>
                                </div>
                                <form method="POST" action="#">
                                <div class="medium-12 columns">
                                    <label>Login
                                        <input type="text" name="login" placeholder="votremail@mail.com"/>
                                    </label>
                                    <label>Password
                                        <input type="password" name="password" placeholder="motdepasse"/>
                                    </label>
                                    <p><input type="checkbox" name="rememberMe" value="1"/>  <label>Se souvenir de mes identifiants</label></p>
                                    <p>Vous n'avez pas encore de compte ? <a class="success" href="#">Inscrivez-vous maintenant !</a></p>
                                </div>
                                <div class="medium-12 columns">
                                    <div class="button-group" id="connectButton">
                                        <input type="submit" class="secondary button" value="Se Connecter">
                                        <button class="alert button" data-close type="button">Retour</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- LoginModal end-->

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

    <?= $content ?>

    <footer>
        <hr>
        <div class="row">
            Tous droits réservés, Au Bois Des Sylves, 2016
        </div>
    </footer>

    <script type="text/javascript" src="./public/js/lib/jquery.js"></script>
    <script type="text/javascript" src="./public/js/lib/foundation.min.js"></script>
    <script type="text/javascript" src="./public/js/app.js"></script>

</body>
</html>
