
<?php 
						  
	session_start();
	ini_set('log_errors', 0);
	error_reporting(0);
  
	$text = $_SESSION['checkEmail'];
						   
	?>

<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>gabriele lombardo</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="./main.css" />
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<noscript>
		<link rel="stylesheet" href="./noscript.css" />
	</noscript>
</head>

<body>

	<!-- Header -->
	<header id="header">
		<h1 style="color:#63022b; font-size:22px"><a href="#intro">  gabriele lombardo<a/></h1>
		<nav>
			<ul>
				<li><a class="nav-item" href="#intro">Intro</a></li>
				<li><a class="nav-item" href="#one">What I Do</a></li>
				<li><a class="nav-item" href="#two">Who I Am</a></li>
				<li><a class="nav-item" href="#work">My Work</a></li>
				<li><a class="nav-item" href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>

	<!-- Intro -->
	<section id="intro" class="main style1 dark fullscreen">
		<div class="myClass" style="margin-top: 10em;">
			<header>
				<h2>Now</h2>
			</header>
			<p style="color:#1d1c1c; font-size:25px">
				L'arte è un salto nel buio.<br>
				Il viaggio di Ulisse, la pietra filosofale.<br>
				<br>
				L'arte è la pretenziosa amante<br>
				che non riesco a lasciare.
			</p>
			<footer>
				<a href="#one" class="button style2 down">More</a>
			</footer>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="main style2 right dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>What I Do</h2>
			</header>
			<p>Indago il segno attraverso il colore, la materia e il
				gesto come forma compiuta. Ogni opera nascie lentamente, progettando i fondi, preparando i colori, lasciando che la forma si riveli nel segno pittorico che assume nuovi significati. </p>
		</div>
		<a href="#two" class="button style2 down anchored">Next</a>
	</section>

	<!-- Two -->
	<section id="two" class="main style2 left dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>Who I Am</h2>
			</header>
			<p>Mi piace sperimentare, indagare, curiosare. Perdermi e tornare sui miei passi. Sono sempre disposto a mettermi in discussione nella continua ricerca di una personale cifra stilistica. L'arte è uno stile di vita ancor prima che una professione. È fede, amore, passione. Quando dipingo, quando creo, sono semplicemente ciò che vorrei essere.</p>
		</div>
		<a href="#work" class="button style2 down anchored">Next</a>
	</section>

	<!-- Work -->
	<section id="work" class="main style3 primary">
		<div class="content">
			<header>
				<h2>My Work</h2>
				<p>Negli anni ho sperimentato varie forme di espressione artistica, incisione, scultura, videoinstallazini e immagini elettroniche. Ultimamente sono alla ricerca del gesto come pensiero concreto. Uso pigmenti naturali e gomma arabica. I fondi li preparo separatamente sperimentando la materia.</p>
			</header>

			<!-- Gallery  -->
			<div class="gallery">
				<article class="from-left">
					<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a>
				</article>
				<article class="from-right">
					<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a>
				</article>
				<article class="from-left">
					<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a>
				</article>
				<article class="from-right">
					<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a>
				</article>
				<!--  SOSPESO
				<article class="from-left">
					<a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a>
				</article>
				<article class="from-right">
					<a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a>
				</article>
			-->
			</div>

		</div>
	</section>


	<!--  MODULO MAIL ********************************************** -->

	<!-- Contact -->
	<section id="contact" class="main style3 secondary">
		<div class="content">
			<header>
				<h2>Say Hello.</h2>
				<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
			</header>
			<div class="box">
				<form method="post" action="./process.php">
					<div class="fields">
						<div class="field half"><input type="text" name="name" placeholder="Name" required = "required"/></div>
						<div class="field half"><input type="text" name="cognome" placeholder="Surname" required = "required"/></div>
						<div class="field half"><input type="email" name="email" placeholder="Email" required = "required" /></div>
						<div class="field"><textarea name="message" placeholder="Message" rows="6" required = "required"></textarea></div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required = "required">
							<label class="form-check-label" for="flexCheckDefault">Accetta <a href="#">Termini e condizioni</a></label>
							<br>
							<br>
						  </div>
						  <div id="secureCap" class="g-recaptcha" data-sitekey="your_site_key"></div>

						 <div class="text"><?php echo $text; ?></div>
						 <?php $_SESSION['checkEmail'] = NULL; ?>
							
					</div>
					<ul class="actions special">
						<li><input type="submit" value="Send Message" /></li>
					</ul>
				</form>
			</div>
		</div>
	</section> 

	<!-- Footer -->
	<footer id="footer">

		<!-- Icons -->
		<ul class="icons">
			<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
			<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
			<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
		</ul>

		<!-- Menu -->
		<ul class="menu">
			<li>&copy; Gabriele Lombardo</li>
            </ul>

	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
