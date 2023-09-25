<?php 
    $text = $_POST["text"];
    $badword = $_POST["badword"];
    $replace = str_replace("$badword", "***", $text);

    $finalText =  $replace;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>
<body>
      <ul>
        <li><?php echo $text." ".strlen($text)?></li>
        <li><?php echo $finalText." ".strlen($finalText)?></li>
      </ul>
</body>
</html>