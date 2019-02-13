<?php

date_default_timezone_set("Europe/Amsterdam");
$time = date("h");
$full_time = date("h:i");

switch ($time) {
  case ($time >= 06 && $time < 12):
    $msg = "Ochtend";
    $img = "images/morning.png";
    break;
  
  case ($time >= 12 && $time < 18):
    $msg = "Middag";
    $img = "images/afternoon.png";
    break;

  case ($time >= 18):
    $msg = "Avond";
    $img = "images/evening.png";
    break;

  case ($time >= 00 && $time < 06):
    $msg = "Nacht";
    $img = "images/night.png";
    break;

  default:
    $msg = 'error';
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
  <title>Goedemorgen</title>
</head>
<body onLoad="startTime();">
  <style>
    body {
      background-image: url(<?=$img?>);
    }

    h1 {
      font-size: 250%;
      text-align: center;
      color: white;
    }

    .main {
      margin-top: 20%;
    }
  </style>
  <script>
  function checkTime(i) {
    if (i < 10) {i = "0" + i};
  return i;
  }

  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var hour = checkTime(h)
    var min = checkTime(m);
    document.getElementById('clock').innerHTML = "Het is nu: " + hour + ":" + min; 
    var t = setTimeout(startTime, 500);
}
  </script>
  <?php include '../components/navbar.html'; ?>
  <div class="main">
    <h1>Goede <?=$msg?>!</h1>
    <h1 id="clock"></h1>
  </div>
</body>
</html>