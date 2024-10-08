<?php
$title = 'Web development and graphic design studio';
$description = 'Linoart web site development and graphic design studio, based in Bulgaria. We always do it the better way!';
$keywords = 'linoart, company, bulgaria, coding, development, website, design';
$lang = 'en';
include "includes/head.php";
echo '<body>';
include "includes/header.php";

?>
<main>
	<section id="main" class="main">
		<div class="main_left">
			<h2>Linoart Studio</h2>
			<p>We are a Bulgarian company specializing in <strong>custom website development</strong>, graphic design,
				and commercial photography. Additionally, we engage in projects related to online sales, web promotion
				and SEO services.</p>
		</div>
		<div class="main_right">
			<img src="images/top_1.jpg" width="210" height="200" alt="Linoart Ltd."
				title="Web development and graphic design studio based in Bulgaria">
		</div>
	</section>

	<section id="profile" class="animation-left">
		<div class="main_left">
			<h2>Company Profile</h2>
			<p>Linoart Ltd. was founded in 2005 in the city of Sliven, located in South-East Bulgaria, initially as a
				graphic design and commercial photography studio. The company extended its offerings to include web
				design services in 2007.</p>
			<p>We collaborate with both domestic and international clients. Our focus in recent years is on programming
				mainly, specifically emphasizing web technologies.</p>
		</div>
		<div class="main_right">
			<img src="images/top_2.jpg" width="272" height="200" alt="Linoart Ltd. - company profile"
				title="Linoart - Bulgaria, company profile">
		</div>
	</section>

	<section id="activities" class="animation-left">
		<div class="main_left">
			<h2>Activities</h2>

			<h3>Latest Projects</h3>
			<p class="projects">
				<a target="_blank" rel="nofollow" href="https://www.sefobg.com"
					title="Website of Seyfettin Shekerov - Sefo">Sefo<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
				<a target="_blank" rel="nofollow" href="https://www.han.jeravna.com/index-en.php"
					title="Website of Han Zheravna">Han Zheravna<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
				<a target="_blank" href="https://www.goldenmaskdetectors.com"
					title="Online shop of Golden Mask metal detectors">GMD<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
				<a target="_blank" rel="nofollow" href="https://www.gmmetaldetectors.com"
					title="Golden Mask company website">Golden Mask<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
				<a target="_blank" rel="nofollow" href="https://www.svetinikola.jeravna.com"
					title="Website of Guest house St. Nicolas - Zheravna">St. Nicolas<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
				<a target="_blank" rel="nofollow" href="https://www.jeravna.com"
					title="Website of Zheravna village">Zheravna<i
						class="fa-solid fa-arrow-up-right-from-square"></i></a>
			</p>
			<h3>Tech Stack</h3>
			<p>Python/Django, JavaScript/React, PHP/MySQL, CSS, HTML, Git, Photoshop, Illustrator, InDesign</p>
		</div>
		<div class="main_right">
			<img src="images/top_3.jpg" width="250" height="203" alt="Linoart Ltd. activities"
				title="Activities of the Linoart company">
		</div>
	</section>

	<section id="contact" class="animation-left">
		<div class="main_left">
			<h2>Contact Us</h2>
			<p><i class="fa-regular fa-envelope"></i> <?php echo protectEmail('studio@linoart.com'); ?></p>
			<p><i class="fa-solid fa-phone"></i> <a target="_blank" href="tel:+359878713500">+359 87 871 35 00</a></p>
			<p><i class="fa-brands fa-whatsapp"></i> <a target="_blank" href="https://wa.me/359898562598">+359 89 856 25
					98</a></p>
		</div>
		<div class="main_right">
			<img src="images/top_4.jpg" width="250" height="170" alt="Contact the Linoart Ltd. stuff"
				title="Contact Linoart studio">
		</div>
	</section>
</main>
<?php include "includes/footer.php"; ?>
<script type="text/javascript" src="javascript/animations.js"></script>
</body>

</html>