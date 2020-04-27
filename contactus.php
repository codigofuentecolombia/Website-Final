<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <?php include('includes/head.php'); ?>
</head>
<body class="contat-version inner_pages" id="contat-version">
<header class="banner-area">
    <div class="nav-header">
        <?php include('includes/header.php'); ?>
        <?php include('includes/menu.php'); ?>
    </div>
	<!--banner area-->
	<div class="banner-body">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="banner-body-content">
						<h2>Contáctanos</h2>
						<div class="contact-btn"> 
							<a href="index.php">Inicio</a>
							<p>/</p>
							<a href="contactus.php">Contacto</a>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="banner-body-image">
						<img src="images/Contact-Page.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- End Header -->

<div class="contact-section pt-190 pb-190">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="c-left-area">
					<div class="title-contact">
						<h2>Visítanos</h2>
						<p>Nuestras instalaciones están dispuestas a atenderte y prestarte el mejor de los servicios.</p>
					</div>
					<div class="c-discript">
						<div class="c-icon">
							<img src="images/c-find.png" alt="">
						</div>
						<div class="c-d-area">
							<h4>Oficina Principal</h4>
							<p>Calle 35 No. 41 -40, Barzal  <br> Villavicencio, META</p>
						</div>
					</div>
					<div class="c-discript">
						<div class="c-icon">
							<img src="images/c-phone.png" alt="">
						</div>
						<div class="c-d-area">
							<h4>Teléfono</h4>
							<p>+57 321 4264221</p>
						</div>
					</div>
					<div class="c-discript">
						<div class="c-icon">
							<img src="images/c-mail.png" alt="">
						</div>
						<div class="c-d-area">
							<h4>Envíanos un Email</h4>
							<p>contacto@cloudcolombia.co</p>
						</div>
					</div>
				</div>
			</div>
			<div class="offset-md-2 col-md-5">
				<div class="contact-form">
					<h2>Escribenos</h2>
					<div id="contact">
						<div id="message"></div>
						<form method="post" action="contact.php" name="contactform" id="contactform">
							<input type="text" class="input-c" placeholder="Nombres"  name="name" id="name">
							<input type="email" class="input-c" placeholder="Correo Electrónico" name="email" id="email">
							<input type="text" class="input-c" placeholder="Celular" name="subject" id="subject">
							<textarea rows="5" placeholder="Message" class="input-c" name="comments" id="comments">	
							</textarea>
							<div class="submit-btn">
                                <input value="Enviar" type="submit" name="submit" id="submit">
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End contact -->

<div class="map-section"> 
    <div class="google_map">
        <div class="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d843.842622135546!2d-73.6425201474094!3d4.144710094927276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1587953383165!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div><!-- Ends: .gmap -->                    
    </div>
</div>
</body>

<footer class="pt-120">
    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?> 
</footer>
</html>
