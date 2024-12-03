<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $path . "assets/css/styles.css"; ?>" rel="stylesheet">
        <script src="<?php echo $path . "assets/javascript/script.js"; ?>" defer></script>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <!-- Desktop Navigation -->
        <div class="nav">
            <ul>
                <li><a href="<?php echo $path . "index.php"; ?>">Home</a></li>
                <li><a href="<?php echo $path . "pages/contrast/contrast.php"; ?>">Contrast</a></li>
                <li><a href="<?php echo $path . "pages/repetition/repetition.php"; ?>">Repetition</a></li>
                <li><a href="<?php echo $path . "pages/alignment/alignment.php"; ?>">Alignment</a></li>
                <li><a href="<?php echo $path . "pages/proximity/proximity.php"; ?>">Proximity</a></li>
            </ul>
        </div>

        <!-- Mobile Menu -->
        <div class="menu" onclick="toggleMenu()">Menu</div>
        <div class="menu-dropdown">
            <a href="<?php echo $path . "index.php"; ?>">Home</a>
            <a href="<?php echo $path . "pages/contrast/contrast.php"; ?>">Contrast</a>
            <a href="<?php echo $path . "pages/repetition/repetition.php"; ?>">Repetition</a>
            <a href="<?php echo $path . "pages/alignment/alignment.php"; ?>">Alignment</a>
            <a href="<?php echo $path . "pages/proximity/proximity.php"; ?>">Proximity</a>
        </div>

        <main>
