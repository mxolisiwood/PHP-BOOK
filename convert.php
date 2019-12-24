<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertor</title>
</head>
<body>
    <h2>ZAR/HUF Currency Conversion</h2>
    <?php
    $zar  = 200;
    $exchange_rate= 20.18;
    $huf = $zar * $exchange_rate;

    echo "$zar Rands is equivalent to: $huf Forints";
    ?>
</body>
</html>