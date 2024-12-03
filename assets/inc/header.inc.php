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
    <body>

    <div class="menu" id="menuToggle">☰ Menu</div>
    <div class="menu-dropdown" id="menuDropdown">
        <a href="<?php echo $path . "index.php"; ?>">Home</a>
        <a href="<?php echo $path . "pages/contrast/contrast.php"; ?>">Contrast</a>
        <a href="<?php echo $path . "pages/repetition/repetition.php"; ?>">Repetition</a>
        <a href="<?php echo $path . "pages/alignment/alignment.php"; ?>">Alignment</a>
        <a href="<?php echo $path . "pages/proximity/proximity.php"; ?>">Proximity</a>
    </div>


    <div class="nav">
        <ul>
            <li class="active"><a href="<?php echo $path . "index.php"; ?>">Home</a></li>
            <li>
                <a href="<?php echo $path . "pages/contrast/contrast.php"; ?>">Contrast</a>
                <div class="subnav">
                    <ul>
                        <li><a href="<?php echo $path . "pages/contrast/color.php"; ?>">Color and Texture</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="<?php echo $path . "pages/repetition/repetition.php"; ?>">Repetition</a>
                <div class="subnav">
                    <ul>
                        <li><a href="<?php echo $path . "pages/repetition/connectedness.php"; ?>">Uniform Connectedness</a></li>
                        <li><a href="<?php echo $path . "pages/repetition/typography.php"; ?>">Typography</a></li>
                        <li><a href="<?php echo $path . "pages/repetition/movement.php"; ?>">Movement</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="<?php echo $path . "pages/alignment/alignment.php"; ?>">Alignment</a>
                <div class="subnav">
                    <ul>
                        <li><a href="<?php echo $path . "pages/alignment/whitespace.php"; ?>">White Space</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="<?php echo $path . "pages/proximity/proximity.php"; ?>">Proximity</a>
                <div class="subnav">
                    <ul>
                        <li><a href="<?php echo $path . "pages/proximity/card_design.php"; ?>">Card Design</a></li>
                        <li><a href="<?php echo $path . "pages/proximity/hicks_law.php"; ?>">Hick's Law</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <main>