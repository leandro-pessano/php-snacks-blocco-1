<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$esito = '';

if (strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
  $esito = 'Accesso riuscito';
}
else {
  $esito = 'Accesso negato';
}
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

<p> <?php echo $esito ?> </p>

</body>
</html>
