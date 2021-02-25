<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = [
  [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantù',
    'puntiCasa' => 55,
    'puntiOpsite' => 60,
  ],
  [
    'casa' => 'Virtus Bologna',
    'ospite' => 'VL Pesaro',
    'puntiCasa' => 55,
    'puntiOpsite' => 60,
  ],
  [
    'casa' => 'Dinamo Sassari',
    'ospite' => 'Brescia',
    'puntiCasa' => 55,
    'puntiOpsite' => 60,
  ],
];
$matchesLength = count($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php for ($i=0; $i <$matchesLength ; $i++) { ?>
    <p> <?php echo $matches[$i]['casa']?> - <?php echo $matches[$i]['ospite'] ?> | <?php echo $matches[$i]['puntiCasa'] ?> - <?php echo $matches[$i]['puntiOpsite'] ?> </p>
  <?php } ?>

</body>
</html>
