<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>An Iteractive HTML Color Sampler</title>
</head>
<body>
    <h2>An Interactive HTML Color Sampler</h2>
    <?php
    $r = $_GET['r'];
    $g = $_GET['g'];
    $b = $_GET['b'];

    $rgb = $r . ',' . $g . ',' . $b;
    ?>
    R: <?php echo $r; ?>
    G: <?php echo $g; ?>
    B: <?php echo $b; ?>
    <p />

    <div style="width:150px; height: 150px;
    background-color: rgb(<?php echo $rgb; ?>)" />
    
</body>
</html>