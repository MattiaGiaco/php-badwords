<?php

$stringa='Mamma diceva sempre: la vita è come una scatola di cioccolatini, non sai mai quello che ti capita.';
$censored = $_GET['word'];
$stringa2 = str_replace($censored,'***',$stringa)

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>badwords</title>
</head>
<body>
  <h1><?php echo $stringa ?></h1>
  <h2>Lunghezza del testo: <?php echo strlen($stringa) ?> </h2>
  <h2>Censored: <?php echo $stringa2 ?> </h2>
  <h2>Lunghezza del testo: <?php echo strlen($stringa2) ?> </h2>
</body>
</html>