<?php
    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=<?php echo $path . "assets/css/styles.css";?> rel="stylesheet">

        <?php 
            $title = "C.R.A.P. Principles - " . $pageTitle;
        ?>

        <title><?php echo $title?></title>
    </head>
    <body>
        <div class="nav">
            <ul>
                <li class="active"><a href=<?php echo $path . "index.php";?>>Home</a></li>
                <li><a href=<?php echo $path . "contrast/contrast.php";?>>Contrast</a>
                    <div class="subnav">
                        <ul>
                            <li><a href=<?php echo $path . "contrast/color.php";?>>Color and Texture</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=<?php echo $path . "repetition/repetition.php";?>>Repetition</a>
                    <div class="subnav">
                        <ul>
                            <li><a href=<?php echo $path . "repetition/connectedness.php";?>>Uniform Connectedness</a></li>
                            <li><a href=<?php echo $path . "repetition/typography.php";?>>Typography</a></li>
                            <li><a href=<?php echo $path . "repetition/movement.php";?>>Movement</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=<?php echo $path . "alignment/alignment.php";?>>Alignment</a>
                    <div class="subnav">
                        <ul>
                            <li><a href=<?php echo $path . "alignment/whitespace.php";?>>White Space</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=<?php echo $path . "proximity/proximity.php";?>>Proximity</a>
                    <div class="subnav">
                        <ul>
                            <li><a href=<?php echo $path . "proximity/card_design.php";?>>Card Design</a></li>
                            <li><a href=<?php echo $path . "proximity/hicks_law.php";?>>Hick's Law</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        
        <main>
            <h1><?php echo $pageTitle?></h1>