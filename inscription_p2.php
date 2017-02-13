<?php

include_once 'inc/connection.inc.php';

$prenom           = $_POST['prenom'];
$email            = $_POST['email'];
$code_postal      = $_POST['code_postal'];
$ville            = $_POST['ville'];
$pays             = $_POST['pays'];
$date_inscription = date('Y-m-d');

$sql = "INSERT INTO membres (prenom, code_postal, ville, pays, email, date_inscription) VALUES ('$prenom', '$code_postal', '$ville', '$pays', '$email', '$date_inscription')";
mysqli_query($dblink, $sql);