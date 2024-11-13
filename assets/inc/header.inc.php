<?php
    $location = 'index';

    if(function_exists('str_contains')){
        if (str_contains($_SERVER['REQUEST_URI'], 'contrast')){
            $location = 'contrast';
        }
        if (str_contains($_SERVER['REQUEST_URI'], 'repetition')){
        $location = 'repetition';
        }
        if (str_contains($_SERVER['REQUEST_URI'], 'alignment')){
            $location = 'alignment';
        }
        if (str_contains($_SERVER['REQUEST_URI'], 'proximity')){
            $location = 'proximity';
        }
    } else {
        if(strpos($_SERVER['REQUEST_URI'], 'contrast') != false){
            $location = 'contrast';
        }
        if(strpos($_SERVER['REQUEST_URI'], 'repetition') != false){
            $location = 'repetition';
        }
        if(strpos($_SERVER['REQUEST_URI'], 'alignment') != false){
            $location = 'alignment';
        }
        if(strpos($_SERVER['REQUEST_URI'], 'proximity') != false){
            $location = 'proximity';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../assets/css/styles.css" rel="stylesheet">

        <?php 
            $title = "CRAP Principles - " . $pageTitle;
        ?>

        <title><?php echo $title?></title>
    </head>
    <body>
        <div class="nav">
            <ul>
                <li class="active"><a href="../../index.html">Home</a></li>
            <?php if($location = 'contrast'){?>    
                <li><a href="contrast.php">Contrast</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="color.php">Color and Texture</a></li>
                <?php } else {?>
                <li><a href="../contrast/contrast.php">Contrast</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../contrast/color.php">Color and Texture</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <?php if($location = 'repetition'){?>
                <li><a href="repetition.php">Repetition</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="connectedness.php">Uniform Connectedness</a></li>
                            <li><a href="typography.php">Typography</a></li>
                            <li><a href="movement.php">Movement</a></li>
                <?php } else {?>
                <li><a href="../repetition/repetition.php">Repetition</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../repetition/connectedness.php">Uniform Connectedness</a></li>
                            <li><a href="../repetition/typography.php">Typography</a></li>
                            <li><a href="../repetition/movement.php">Movement</a></li>
                <?php }?>
                        </ul>
                    </div>
                </li>
                <?php if($location = 'alignment'){?>
                    <li><a href="alignment.php">Alignment</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="whitespace.php">White Space</a></li>
                    <?php } else {?>
                <li><a href="../alignment/alignment.php">Alignment</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../alignment/whitespace.php">White Space</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
                <?php if($location = 'Proximity'){?>
                    <li><a href="proximity.php">Proximity</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="card_design.php">Card Design</a></li>
                            <li><a href="hicks_law.php">Hick's Law</a></li>
                <?php } else {?>
                <li><a href="../proximity/proximity.php">Proximity</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../proximity/card_design.php">Card Design</a></li>
                            <li><a href="../proximity/hicks_law.php">Hick's Law</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        
        <main>
            <h1><?php echo $pageTitle?></h1>
            <p><?php echo $_SERVER['REQUEST_URI']?></p>