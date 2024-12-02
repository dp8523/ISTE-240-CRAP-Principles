<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= CSS_PATH ?>" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kameron:wght@400..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Kameron:wght@400..700&display=swap');
    </style>
    <title><?= $pageTitle ?? 'CRAP Principles'; ?></title>
</head>
<body>
    <div class="nav">
        <ul>
            <li class="<?= $currentPage == 'alignment.php' ? 'active' : ''; ?>"><a href="alignment.php">Alignment</a></li>
            <li class="<?= $currentPage == 'white_space.php' ? 'active' : ''; ?>"><a href="white_space.php">White Space</a></li>
        </ul>
    </div>
