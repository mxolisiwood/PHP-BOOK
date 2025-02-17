<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Project 3-4: Member Registration</h2>
<?php
// retrieve details from POST submission
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$profession = $_POST['profession'];
$resident = $_POST['resident'];
// validate submitted data
// check name
if (empty($name)) {
die('ERROR: Please provide your name.');
}
// check address
if (empty($address)) {
die('ERROR: Please provide your address.');
}
// check age
if (empty($age)) {
die('ERROR: Please provide your age');
} else if ($age < 18 || $age > 60) {
die('ERROR: Membership is only open to those between 18 and 60 years.');
}
// check profession
if (empty($profession)) {
die('ERROR: Please provide your profession.');
}
// check residential status
if (strcmp($resident, 'no') == 0) {
    die('ERROR: Membership is only open to residents.');
    }
    // if we get this far
    // all the input has passed validation
    // formulate and send e-mail message
    $to = 'silabelamxolisi@gmail.com';
    $from = 'webmaster@some.domain.com';
    $subject = 'Application for membership';
    $body = "Name: $name\r\nAddress: $address\r\n
    
    Age: $age\r\nProfession: $profession\r\n
    Residential status: $resident\r\n";
    if(mail($to, $subject, $body)) {
    echo 'Thank you for your application.';
    } else {
    die('ERROR: Mail delivery error');
    }
    ?>
    </body>
</html>
    
