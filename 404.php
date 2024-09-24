<?php
$title = 'Error 404- Page Not Found';
$description = 'Error 404 - page not found. The page you are trying to reach does not exist on the server.';
$keywords = 'error, notfound';
$lang = 'en';

include "includes/head.php";
echo '<body>';
include "includes/header.php";
?>

<main>
	<section id="main" class="main">
		<div class="main_left">
			<h2>ERROR 404.</h2>
			<h3>PAGE NOT FOUND</h3>
			<p>We have recently updated our website and you've maybe wanted to go on some of the old pages.</p>
			<p>Please find the desired page from the site menu.</p>
		</div>
		<div class="main_right">
			<img src="images/top_1.jpg" alt="Linoart Ltd." title="Trading company based in Bulgaria" />
		</div>
	</section>
</main>

<?php include "includes/footer.php"; ?>
<script type="text/javascript" src="javascript/animations.js"></script>
</body>

</html>