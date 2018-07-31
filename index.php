<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    $foot = 1;

    while ($foot <= 100) {
      echo ($foot += 15) ." On tient le bon bout <br />";
    }
    ?>
  </p>
</body>
</html>
