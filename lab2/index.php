<?php
define("message", "Hello World!", true);
$message2 = "Learning PHP";
$text1 = "Hello";
$text2 = "World";
$array = ["Hello", "World"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  <title>Lab 2</title>
</head>
<body>
  <?php include '../components/navbar.html'; ?>
  <?php $nav_text = "Lab 2"; $nav_bottom = "Hello World!"; include '../components/menu.php'; ?>
<h1><?php echo 'Hello World!'?></h1>
<h1><?=message?></h1>
<h1><?=$message2?></h1>
<h1><?php $message2 = "Hello World!"; echo $message2?></h1>
<h1><?php echo $text1 . " " . $text2 . "!" ?></h1>
<h1><?php echo $array[0] . " " . $array[1] . "!"?></h1>
</body>
</html>