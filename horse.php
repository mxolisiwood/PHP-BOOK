<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<title>HTML Color Table</title>
<style type="text/css">
body{
    font-family: Verdana sans-serif;
}
td{
    border: solid 5px white;
}
</style>
<body>
    <h2>Colors with HTML and PHP</h2>
    <table>
    <tr>
        <td>Blue</td>
        <td style="width:40px; background-color:<?php echo '#ff0000'; ?>"></td>
    </tr>
    <tr>
    <td><?php echo 'Red'; ?></td>
    <td style="width:40px; background-color:<?php echo '#ff0000'; ?>"</td>
    </tr>
    
<?php
    // This row generated through PHP
    echo "<tr>\n";
    echo "  <td>Green</td>\n";
    echo "<td style=\"width:40px; background-color:#ff0000\"></td>\n";
    echo "</tr>\n";
?>    

<?php
$name = "Mxolisi";
$now = 2019;
$currentYear = $now;
var_dump($name);

$nextYear = $currentYear + 1;

echo "$currentYear will end soon. We will Welcome $nextYear!";
?>
<h2>Welcome to <?php echo $name; ?>'s Blog!'</h2>


</body>
</html>