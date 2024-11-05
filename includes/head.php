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

    function protectEmail($email)
    {
        /**
         * Protects an email from being crawled by bots.
         * Returns a protected string representation of the email.
         * If the email is not valid, returns a warning.
         * 
         * Requires min. FontAwesome 4.2 to work properly!
         * https://fontawesome.com/
         * 
         * PHP version 8.2
         * @category   Useful PHP functions
         * @author     Original Author <contact@ndimitrov.com>
         * @copyright  2024 Nikolay Dimitrov, Linoart Ltd.
         * @link       https://www.linoart.com
         */
        $email = strtolower($email);
        $re = '/([a-z0-9_\.-]+)(@)([\da-z\-]+)(\.)([a-z\.]{2,6})/';
        preg_match($re, $email, $matches);

        if ($matches) {
            $result = [];
            foreach ($matches as $match) {
                $result[] = $match;
            }
            $name = "<span>{$result[1]}</span>";
            $at = "<i class='fa-regular fa-at'></i>";
            $domain = "<span>{$result[3]}</span>";
            $dot = "<span>.</span>";
            $extension = "<span>{$result[5]}</span>";
            return $name . $at . $domain . $dot . $extension;
        }
        return "Warning! Invalid Email Format!";
    }

    ?>

</head>