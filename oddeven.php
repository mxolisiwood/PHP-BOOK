<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd/Even Number Tester</title>
</head>
<body>
    <h2>Odd/Even Number Tester</h2>
<?php if(!isset($_POST['submit'])) {
    ?>
        <form method="post" action="oddeven.php">
        Enter value: <br />
        <input type="text" name="num" size="3" />
        <p>
        <input type="submit" name="submit" value="Submit" />
        </form>
        <?php
// if form submitted
// process form input
} else {
// retrieve number from POST submission
$num = $_POST['num'];
// test value for even-ness
// display appropriate message
if (($num % 2) == 0) {
echo 'You entered ' . $num . ', which is an even number.';
} else {
echo 'You entered ' . $num . ', which is an odd number.';
}
}
?>
</body>
</html>