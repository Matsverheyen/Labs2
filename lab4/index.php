<?php

define("spel", "Yathzee");
define("spelen", true);
define("tijd", 20);

switch (spel) {
  case "Yathzee":
    switch (spelen) {
      case true:
        if (tijd > 15 && tijd < 30) {
          $msg = "Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd";
        } elseif (tijd <15 || tijd > 30) {
          $msg = "Je wilt Yathzee spelen want je vindt het gewoon leuk";
        }
        break;
      
      case false:
        if (tijd > 100) {
          $msg = "Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien";
        } elseif (tijd <= 100) {
          $msg = "Je wilt geen Yathzee spelen want je wilt minder dan 100 punten behalen";
        }
        break;

      default:
        $msg = "error";
        break;
    }
    break;
  
  case "Monopoly":
    switch (spelen) {
      case true:
        if (tijd == 1) {
          $msg = "Je wilt Monopoly spelen want je hebt aan 1 spelletjes genoeg";
        } elseif (tijd > 1) {
          $msg = "Je wilt Monopoly spelen want je houd ervan om iedereen blut te maken";
        }
        break;
      
      case false:
        if (tijd == 2 || tijd >120) {
          $msg = "Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur";
        } else {
          $msg = "Je wilt Monopoly niet spelen want je houd niet van hotels";
        }
        break;
        
      default:
        $msg = "eror";
        break;
    }
    break;

  case "Schaken":
    switch (spelen) {
      case true:
        if (tijd == 2) {
          $msg = "Je wilt Schaken want je vindt zwart en wit leuk";
        } elseif (tijd < 2 || tijd > 2) {
          $msg = "Je wilt Schaken wat je denk slimmer dan mij te zijn";
        }
        break;
      
      case false:
        if (tijd == -1) {
          $msg = "Je wilt echt niet Schaken";
        } else {
          $msg = "Je wilt gewoon niet Schaken";
        }
        break;
        
      default:
        $msg = "error";
        break;
    }
    break;

  default:
    $msg = "error";
    break;
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
  <title>Lab 4</title>
</head>
<body>
  <?php include '../components/navbar.html'; ?>
  <h1 style="margin-top:50px"><?=$msg?></h1>
</body>
</html>