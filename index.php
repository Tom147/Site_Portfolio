<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Tom BACON">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://kit.fontawesome.com/72050f4fcb.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<title>Tom BACON</title>
</head>

<body>

	<nav>
		<div class="logo">
			<a href="#accueil_Page" id="left"><img src="img/logoFinal.png" id="logo"></a>
		</div>
		<ul class="nav-links">
			<li><a href="#competence_Page">Compétences  &nbsp;<i class="fas fa-desktop"></i></a></li>
			<li><a href="#portfolio_Page">Portfolio &nbsp;<i class="fas fa-code"></i></a></li>
			<li><a href="#contact_Page">Contact &nbsp;<i class="fas fa-phone"></i></a></li>
		</ul>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>

	<script type="text/javascript">
		const navSlide = () => {
			const burger = document.querySelector('.burger');
			const nav = document.querySelector('.nav-links');
			const navLinks = document.querySelectorAll('.nav-links li')
			
			burger.addEventListener('click',()=>{

				//toggle nav
				nav.classList.toggle('nav-active');

			//Animate Links
			navLinks.forEach((link, index) => {
				if(link.style.animation) {
					link.style.animation = '';
				} else {
					link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
				}
			});
		});
	}

		navSlide();
	</script>
<!----------------------------------------------------------------------------------------------------->
<!--                                  <ACCEUIL>													     -->
<!----------------------------------------------------------------------------------------------------->
	<section id=accueil_Page>
		<div id="info">
			<h1>Integrateur Web / Webdesigner</h1> </br>
			<p>Bonjour a vous ! Je m'appelle Tom, et suis en première année d'informatique a Campus Academy de Rennes dans le but d'obtenir le diplôme de concepteur et développeur d'application. Pour cela, je recherche une alternance sur une période de deux ans.</p>
	  <button><a href="doc/cv.pdf" target="blank"> Télécharger mon C.V &nbsp;<i class="fas fa-download"></i></a></button> <button class="rapport"><a href="https://docs.google.com/document/d/103VYbDN-Q6LfoFu71jlK91wYvS_UoUKvZmmxYO6gRC4/edit?usp=sharing" target="blank"> Rapport de stage &nbsp;<i class="fas fa-download"></i></a></button>
		</div>
		<div id="arrowIcon">
			<a href="#competence_Page" id="arrowDown"><i class="fas fa-angle-double-down fa-3x"></i></a>
		</div>
	</section>
<!----------------------------------------------------------------------------------------------------->
<!--                                  </ACCEUIL>													 -->
<!----------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------->
<!--                                  <COMPETENCES>													 -->
<!----------------------------------------------------------------------------------------------------->
	<section id="competence_Page">
		
		<h2>Compétences &nbsp;<i class="fas fa-desktop"></i></h2>
		
		<div class="ulliRow">
			<article id="languages">
				<h3>Langages</h3></br>
				<ul>
					<li><span>HTML 5</span></li>
					<li><span>CSS 3</span></li>
					<li><span>javascript</span></li>
					<li><span>PHP 7</span></li>
					<li><span>SQL</span></li>
				</ul>
			</article>

			<article id="logiciel">
				<h3>Logiciel</h3></br>
				<ul>
					<li><span>Figma</span></li>
					<li><span>Adobe XD</span></li>
					<li><span>Photoshop</span></li>
					<li><span>VM Virtual Box</span></li>
					<li><span>git</span></li>
				</ul>
			</article>

			<article id="framework">
				<h3>Framework</h3></br>
				<ul>
					<li><span>Bulma</span></li>
					<li><span>Bootstrap</span></li>
				</ul>
			</article>
	
			<article id="os">
				<h3>OS</h3>
				<ul>
					<li><span>Windows</span></li>
					<li><span>Linux</span></li>
				</ul>
			</article> 
		</div>
	</section>
<!----------------------------------------------------------------------------------------------------->
<!--                                  </COMPETENCES>											     -->
<!----------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------->
<!--                                  <PORTFOLIO>											     	 -->
<!----------------------------------------------------------------------------------------------------->
	<section id="portfolio_Page">

		<div id="redBG">
			<h2>Portfolio &nbsp;<i class="fas fa-code"></i></h2>
		</div>

		<div id="projets">
			<article id="projet1">
				<img src="img/projet1.PNG" alt="intégration site web" title="integration">
				<div class="infoProjet">
					<p>Le projet Héliosengi et un site que j'ai pu intégrer lors de mon stage de première année a Campus Academy 
au sein de l'agence Netskiss basé à Caen.</p>
					<div class="btnProjet">
						<a href="https://www.heliosengi.com/" target="blank"><button class="voirBtn">Voir</button></a>
						<a href="php/commentaire.php?id=1" target="blank"><button class="avisBtn">Avis</button></a>
					</div>
				</div>
			</article>

			<article id="projet2">
				<img src="img/projet2.png" alt="maquette Art Amaze" title="Art Amaze">
				<div class="infoProjet">
					<p> Concept d'une application mobile permettant de découvrir des artistes-peintres de différents époques</p>
					<div class="btnProjet">
						<a href="https://www.behance.net/gallery/96051395/Art-Amaze" target="blank"><button class="voirBtn">Voir</button></a>
						<a href="php/commentaire.php?id=2" target="blank"><button class="avisBtn">Avis</button></a>
					</div>
				</div>
			</article>

			<article id="projet3">
				<img src="img/projet3.png" alt="maquette mbiy" title="Mbiy">
				<div class="infoProjet">
					<p>Ceci est un projet réalisé dans le cadre du baccalauréat, et qui reprend l'idée des boites à livres.</p>
					<div class="btnProjet">
						<a href="https://www.behance.net/gallery/95884883/MBiY" target="blank"><button class="voirBtn">Voir</button></a>
						<a href="php/commentaire.php?id=3" target="blank"><button class="avisBtn">Avis</button></a>
					</div>
				</div>
			</article>
		</div>

	</section>
<!----------------------------------------------------------------------------------------------------->
<!--                                  </PORTFOLIO>											     	 -->
<!----------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------->
<!--                                  <CONTACT>											     	     -->
<!----------------------------------------------------------------------------------------------------->
	<section id="contact_Page">
		<h2>Contact &nbsp;<i class="fas fa-phone"></i></h2>

		<?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['message'];
            if (($name=="") OR ($email=="") OR ($message==""))
               {
                 echo "Tous les champs doivent être rempli.";
               }
            else{
                $from="From: $name<$email>\r\nReturn-path: $email";
                $subject="Message envoyé depuis le formulaire de contact du site portfolio";
                mail("tom@tom-bacon-web.com", $subject, $message, $from);
                echo "Email envoyé !";
                }
            }
        ?>

		<form  action="#contact_Page" method="POST" enctype="multipart/form-data">
			    <input type="hidden" name="action" value="submit">
			    
			    <input name="name" type="text" value="" size="30" placeholder="nom" /><br>
			    
			    <input name="email" type="email" value="" size="30" id="email" placeholder="email" /><br>
			    
			    <textarea name="message" rows="7" cols="30" id="Commentaire" placeholder="Message"></textarea><br>
			    <input type="submit" value="Envoyer" id="sendbtn" />
		</form>

		<div id="infoLink">
			<a href="https://github.com/Tom147" target="blank" class="a-rs"><i class="fab fa-github fa-2x"></i></a>
			<a href="https://www.linkedin.com/in/tom-bacon-8081711a0/" target="blank" class="a-rs"><i class="fab fa-linkedin fa-2x"></i></a>
		</div>
		<p></p>
	</section>
<!----------------------------------------------------------------------------------------------------->
<!--                                  </CONTACT>											     	 -->
<!----------------------------------------------------------------------------------------------------->
	<footer>
			<p>Tom BACON - ©2020</p>
			<a href="rgpd/rgpd.html" target="blank">Mentions Légales</a>
	</footer>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="js/reveal.js"></script>

</body>
</html>
