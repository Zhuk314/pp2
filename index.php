<?php
// Author: Yurii Zhuk
// Date: 04/15/2021
// File URL: http://yzhuk.greenriverdev.com/328/pp2/
// Pair Program 2

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Pair Program 2.</title>
</head>
<body>
<div class="container jumbotron">
<?php
echo "<h1 class='text-center'>PHP Array Practice</h1>";
include 'functions.php';

// 2.
// Define an array $numbers...
echo "<h3>The array: </h3>";
$numbers = array(7,9,8,9,8,8,6);

printArr($numbers);


// 3.
// Call the function largest and print the result
echo "<h3>The largest number: </h3>";
$largestNum = largest($numbers);
echo "<p>The largest number is: $largestNum</p>";








?>
</div>
</body>
</html>