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
			<h1>Developpeur&nbsp; <span> front-end</span></h1> </br>
			<p>Bonjour a vous ! Je m'appelle Tom, et suis en première année d'informatique a l'IMIE de Rennes dans le but d'obtenir le diplôme de concepteur et développeur d'application. Pour cela, je recherche une alternance sur une période de deux ans.</p>
			<button><a href="doc/CV_BACON-Tom.pdf" target="blank"> Télécharger mon C.V &nbsp;<i class="fas fa-download"></i></a></button>
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
					<li><span>HTML</span></li>
					<li><span>CSS</span></li>
					<li><span>javascript</span></li>
					<li><span>PHP</span></li>
					<li><span>SQL</span></li>
					<li><span>python</span></li>
				</ul>
			</article>

			<article id="logiciel">
				<h3>Logiciel</h3></br>
				<ul>
					<li><span>Figma</span></li>
					<li><span>Adobe XD</span></li>
					<li><span>VM Virtual Box</span></li>
					<li><span>Office 365</span></li>
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
				<img src="img/projet1.png" alt="intégration site web" title="integration">
				<div class="infoProjet">
					<p>Ce site est une maquette que j'ai pu intégrer parmis d'autres dans le cadre de ma formation en première année d'informatique 💻 au sein de l'IMIE de Rennes</p>
					<div class="btnProjet">
						<a href="https://github.com/Tom147/int-gration-imie" target="blank"><button class="voirBtn">Voir</button></a>
						<a href="php/commentaire.php?id=1" target="blank"><button class="avisBtn">Avis</button></a>
					</div>
				</div>
			</article>

			<article id="projet2">
				<img src="img/projet2.png" alt="maquette covo'night" title="covo'night">
				<div class="infoProjet">
					<p>Ceci est une maquette réalisé à partir d'un projet pour un étudiant en première année d'école de commerce, l'application reprend le principe de Blablacar 🚗, mais est destiné aux personnes rentrant de soirée 🍺 et cherchant quelqu'un pour les raccompagné.</p>
					<div class="btnProjet">
						<a href="https://github.com/Tom147/covo-night" target="blank"><button class="voirBtn">Voir</button></a>
						<a href="php/commentaire.php?id=2" target="blank"><button class="avisBtn">Avis</button></a>
					</div>
				</div>
			</article>

			<article id="projet3">
				<img src="img/projet3.png" alt="maquette tai jitsu do" title="tai jitsu do">
				<div class="infoProjet">
					<p>Pratiquant le Tai Jitsu Do (Discipline martial 🥋), j'ai voulu repensé le site web officiel de cette discipline</p>
					<div class="btnProjet">
						<a href="https://github.com/Tom147/TJD" target="blank"><button class="voirBtn">Voir</button></a>
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
			$action=$_REQUEST['action'];
			if ($action=="")    /* display the contact form */
			    {
			    ?>
			    <form  action="" method="POST" enctype="multipart/form-data">
			    <input type="hidden" name="action" value="submit">
			    
			    <input name="name" type="text" value="" size="30" placeholder="nom" /><br>
			    
			    <input name="email" type="text" value="" size="30" id="email" placeholder="email" /><br>
			    
			    <textarea name="message" rows="7" cols="30" id="Commentaire" placeholder="Message"></textarea><br>
			    <input type="submit" value="Envoyer" id="sendbtn" />
			    </form>
			    <?php
			    } 
			else                /* send the submitted data */
			    {
			    $name=$_REQUEST['name'];
			    $email=$_REQUEST['email'];
			    $message=$_REQUEST['message'];
			    if (($name=="")||($email=="")||($message==""))
			        {
					echo "Tout les champs doivent etre rempli <a href=\"\">the form</a> again.";
				    }
			    else{		
				    $from="From: $name<$email>\r\nReturn-path: $email";
			        $subject="message envoyé depuis mon site";
					mail("tom.bacon147@gmail.com", $subject, $message, $from);
					echo "Email envoyé";
				    }
			    }  
		?>


		<div id="infoLink">
			<a href="https://github.com/Tom147" target="blank" class="a-rs"><i class="fab fa-github fa-2x"></i></a>
			<a href="https://www.linkedin.com/in/tom-bacon-8081711a0/" target="blank" class="a-rs"><i class="fab fa-linkedin fa-2x"></i></a>
		</div>
			<p>tombacon.pro@gmail.com</p>
	</section>
<!----------------------------------------------------------------------------------------------------->
<!--                                  </CONTACT>											     	 -->
<!----------------------------------------------------------------------------------------------------->
	<footer>
			<p>Tom BACON - ©2020</p>
			<a href="rgpd/rgpd.html" target="blank">Mentions Légales</a>
	</footer>

</body>
</html>
