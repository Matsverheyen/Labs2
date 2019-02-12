<?php

$array = [3, 5, 8, 12];

function addFunc($a, $b) {
  return "$a + $b = " . ($a + $b);
}

function multiply($a, $b){
  return "$a x $b = " . $a * $b;
}

function substractFunc($a, $b) {
  return "$a - $b = " . ($a - $b);
}

function divide($a, $b) {
  return "$a / $b = " . $a / $b;
}

function table($x) {
  for ($i=1; $i <= 10; $i++) { 
    echo $i . " x " . $x . " = " . ($i * $x) . "<br>";
  }
}

function tafel($arr) {
    foreach ($arr as $nummer) {
    table($nummer);
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  <title>Lab 3</title>
</head>
<body>
    <?php include '../components/navbar.html'; ?>
  <?php $nav_text = "Lab 3"; $nav_bottom = "RekenProgramma"; include '../components/menu.php'; ?>
<h1><?php
$num1 = mt_rand(0, 1000);
$num2 = mt_rand(0, 1000);
echo "Random number 1: " . $num1 . "<br>";
echo "Random number 2: " . $num2 . "<br>";
echo addFunc($num1, $num2) . "<br>";
echo substractFunc($num1, $num2) . "<br>";
echo divide($num1, $num2) . "<br>";
echo multiply($num1, $num2). "<br>";
?></h1>
<h1><?php table(6) ?></h1>
<h1><?php tafel($array);?></h1>
</body>
</html>