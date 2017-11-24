<header>
		<a href="?page="><img src="../img/logo.png" width="100%" height="20%" ;></a>
		<?php
		if (isset($_SESSION['id'])) {
		?>
		<p>Bonjour <br/><span><?php 
		if ($_SESSION['sexe'] == "homme"){
			echo "Mr ".$_SESSION['nom'];
		}else{
			echo "Mme ".$_SESSION['nom'];
		}
		?>
		</span><br/><br/>
		<button><a href="?page=profil">Mon Profil</a></button>
		<button><a href="?page=deconnexion">Déconnexion</a></button></p>
		<?php
		}else{
		?>
		<ul>
			<form method="POST" action="?page=connexion">
			<li><input type="email" name="email" placeholder="Email"></li>
			<li><input type="password" name="password" placeholder="Password"></li>
			<li><button>Connexion</button></li><br/>
			</form>
			<li>Pas encore inscrit?</li>
			<li><button><a href="?page=inscription">Inscription</a></button></li>
		</ul>
		<?php
		}
		?>
	</header>
<div id="nav1">
	<nav>
		<ul>
		  	<li>
				<a href="?page=">Accueil</a>
		 	 </li>
		 	 <li id="clickmenu">Services
		 	 	<article class="disparait" id="menupresen">
			 	 <a href="#preNutrition">Nutrition</a><br/>
			 	 <a href="#preMeditation">Méditation</a><br/>
			  	<a href="#preMusculation">Musculation</a><br/>
			  	<a href="#preCoach">Coach Personnel</a><br/>
			  	</article>
			</li>
			<?php
				if (isset($_SESSION['id'])) {
			?>
			<li id="clickmenu1">PasdeNom
		 	 	<article class="disparait" id="menupresen1">
			 	 <a href="#">Mon suivi</a><br/>
			 	 <a href="#">Musculation</a><br/>
			  	<a href="#">Coach Personnel</a><br/>
			  	</article>
			</li>
			<?php
			}
			?>
		  	<li>
				<a href="#">Magasin</a>
		  	</li>
		 	 <li>
				<a href="#infocontact">Contact</a>
		 	 </li>
		</ul>
	</nav>
</div>