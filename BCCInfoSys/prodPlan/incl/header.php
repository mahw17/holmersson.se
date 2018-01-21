<?php
include("config.php");
// include("dbfunctions.php");
$stylesheet = "css/style.css";
?>

<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <link href="<?=$stylesheet?>" rel="stylesheet">
  <link rel='shortcut icon' href='img/hand-o-peace.png'/>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
</head>
<body>

<header class="site-header">
    <!-- <img src="img/rock-sign.png" class="rock-sign" alt="logo"/> -->
    <span class="site-title"><?= $site_title ?></span>
    <span class="site-slogan"><?= $site_slogan ?></span>
        <!-- <form method="post" action="postform-process.php">
                <br>
                <select class="stylechooser" name="style" onchange="this.form.submit()">
                    <option value="default" <?= check_if_current("default") ?>>Default style</option>
                    <option value="second" <?= check_if_current("second") ?>>Second style</option>
                    <option value="third" <?= check_if_current("third") ?>>Third style</option>
                </select>
        </form> -->
</header>
