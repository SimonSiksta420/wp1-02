<?php
$name = "Šimon Siksta";
$gender = "Jsem Muž";
$school = "Gymnázium Čáslav";
$phonenumber = "420 666 6969";
$birthdate = "Narodil jsem se v roce 2003";
$email = "simon.siksta@student.ossp.cz";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Informace o mně </title>
</head>
<body>
    <h2><?php echo $name; ?></h2>
<ul>
    <li> <?php echo $birthdate; ?> </li>
    <li> <?php echo $gender; ?> </li>
    <li> <?php echo $school; ?> </li>
    <li> <?php echo $email; ?> </li>
    <li> <?php echo $phonenumber; ?> </li>
    <li>Rád hraju videohry</li>
    <li>Mám rád zvířata</li>
    <li>Vlastním zakrslého králíka, který se jmenuje Šimek</li>
    <li>Politika mě nezajímá</li>
    <li>Baví mě čtení</li>
    <li>Rád se učím nové jazyky</li>
    <li>Umím velice dobře anglicky</li>
    <li>Konec</li>
</ul>
</body>
</html>