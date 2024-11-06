
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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="../contrast/contrast.html">Contrast</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../contrast/color.html">Color and Texture</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="../repetition/index.php">Repetition</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="../repetition/connectedness.html">Uniform Connectedness</a></li>
                            <li><a href="../repetition/typography.html">Typography</a></li>
                            <li><a href="../repetition/movement.html">Movement</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="alignment/alignment.html">Alignment</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="alignment/whitespace.html">White Space</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="proximity/proximity.html">Proximity</a>
                    <div class="subnav">
                        <ul>
                            <li><a href="proximity/card_design.html">Card Design</a></li>
                            <li><a href="proximity/hicks_law.html">Hick's Law</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        
        <main>
            <h1><?php echo $pageTitle?></h1>