<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Topping Selector</title>
</head>
<body>
    <h2>Pizza Topping Selector</h2>
        You Selected the following toppings: <br />
        <ul>
            <?php
            foreach ($_POST['toppings'] as $t) {
                
                echo "<li>$t</li> \r\n";
               
            }
            ?>

        </ul>
        <input type="submit" name="submit" value="submit"/>    
</body>
</html>