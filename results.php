<?php

$text = $_GET["text"];



$banWord = $_GET["banWord"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page with ban words</title>
</head>
<body>
  <h1>Questo è il testo che hai scritto e la sua lunghezza:</h1>
  <p><?php echo $inputText = $text . strlen($text); ?></p>
  <h1>Questo è il testo che hai scritto con i caratteri bannati:
  </h1>
  <p></p>
  <p> <?php echo $banWordText = str_replace($banWord,"***",$text); echo strlen($banWordText) ?></p>
</body>
</html>