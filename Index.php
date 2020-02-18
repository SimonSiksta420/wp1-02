<?php
/*
$firstname = "Šimon";
$lastname = "Siksta";
$gender = "Jsem Muž";
$school = "Gymnázium Čáslav";
$phonenumber = "420 666 6969";
$birthdate = "Narodil jsem se v roce 2003";
$email = "simon.siksta@student.ossp.cz";
*/

$firstname = "Sorin";
$lastname = "Eni";
$gender = "Muž";
$school = "Zš Komenského Nymburk";
$phonenumber = "666 666 429";
$birthdate = "4.2 2003";
$email = "sorin.eni@student.ossp.cz";
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
    <h2> <?= $firstname; ?> <?= $lastname?> </h2>
<ul>
    <li> Jméno: <?= $firstname ?> </li>
    <li> Příjmení: <?= $lastname ?> </li>
    <li> Datum narození: <?= $birthdate; ?> </li>
    <li> Pohlaví: <?= $gender; ?> </li>
    <li> Škola: <?= $school; ?> </li>
    <li> E-mail: <?= $email; ?> </li>
    <li> Číslo <?= $phonenumber; ?> </li>
</ul>
</body>
</html>