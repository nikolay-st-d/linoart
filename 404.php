<?php
$title='ERROR 404';
$description='Error 404- page not found';
$keywords='error, notfound';

include("includes/head.php");
echo '<body>';
echo '<div class="container">';
include("includes/header.php");
echo '</div">';
echo '<div class="container">';
include("includes/menu.php");
echo '</div">';
?>
<div class="container">
	<div class="main">
		<div class="main_left">
			<h1>ERROR 404.</h1>
			<h2>PAGE NOT FOUND</h2>
			<p>We have recently updated our website and you've maybe wanted to go on some of the old pages.</p>
			<p>Please find the desired page from the site menu.</p>
		</div>
		<div class="main_right">
			<img src="images/top_1.jpg" alt="Linoart Ltd." title="Trading company based in Bulgaria" />
		</div>
	</div>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>