<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Averaging</title>
</head>
<body>
    <h2>Grade Averaging</h2>
<?php
// Define the array of grades
$grades = array(
    25, 64, 23, 87, 56, 38, 78, 57, 98, 95,
    81, 67, 75, 76, 74, 82, 36, 39, 
    54, 43, 49, 65, 69, 69, 78, 17, 91
);
// Get the number of grades
$count = count($grades);

//iterate over grades
//calculate the total and top/bottom 20%

$total = $top = $bottom = 0;
foreach($grades as $g){
    $total += $g;
    if($g <=20) {
        $bottom++;
    }
    if($g >=80) {
        $top++;
    }
}

//Calculate average
$avg = round($total / $count);

//Print Stats
echo "Class Average: $avg <br />";
echo "Number of students in the bottom 20%: $bottom <br/>";
echo "Number of students in the top 20: $top <br/>";

?>    
</body>
</html>