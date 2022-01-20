<?php

$Nome = $_POST['Nome'];
$Cognome = $_POST['Cognome'];
$Email=$_POST['Email'];
$ConfermaEmail=$_POST['ConfermaEmail'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$ConfermaPassword=$_POST['ConfermaPassword'];
$DataNascita=$_POST['DataNascita'];
$Sesso=$_POST['Sesso'];
$Cellulare=$_POST['Cellulare'];

echo "<br>".$Nome;
echo "<br>".$Cognome;
echo "<br>".$Email;
echo "<br>".$ConfermaEmail;
echo "<br>".$Username;
echo "<br>".$Password;
echo "<br>".$ConfermaPassword;
echo "<br>".$DataNascita;
echo "<br>".$Sesso;
echo "<br>".$Cellulare;

echo "<br><br><br>";
var_dump($_POST);
?>