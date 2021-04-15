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
    <title>Pair Program 2.</title>
</head>
<body>
<?php
echo "<p>PHP Array Practice</p>";

// 2. Define an array $numbers...
$numbers = array(7,9,8,9,8,8,6);

function printArr($array) {
    foreach($array as $value){
        echo "<p>$value</p>";
    }
}

printArr($numbers);






?>
</body>
</html>