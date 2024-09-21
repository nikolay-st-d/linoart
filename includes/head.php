<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <META NAME="ROBOTS" content="index, follow">
    <meta name="GOOGLEBOT" content="index, follow">
    <meta name="google-site-verification" content="KgfAL9DcluKeWDwEc_65_rPc7ONYsE8g98YR041YJ7U">
    <link rel="shortcut icon" href="favicon.png">

    <?php
    if (isset($canonical_url) and $canonical_url != '') {
        echo "<link rel='canonical' href='{$canonical_url}' />";
    }
    
    echo '<meta property="og:type" content="website">';
    echo "<meta property='og:title' content='{$title}'>";
    echo "<meta property='og:description' content='{$description}'>";
    echo "<meta property='og:url' content='{$actual_link}'>";
    echo '<meta property="og:image" content="https://www.linoart.com/images/linoart-ltd.jpg">';
    echo '<meta property="og:image:type" content=image/jpeg">';
    echo "<meta property='og:image:alt' content='{$title}'>";
    echo '<meta property="og:site_name" content="Linoart Ltd.">';

    include './includes/vis_log.php';
    ?>

</head>
