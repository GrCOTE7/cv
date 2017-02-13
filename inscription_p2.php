<pre>
<?php
print_r($_POST);
?>
</pre>
<?php

include_once 'inc/connection.inc.php';

$prenom      = $_POST['prenom'];
$email       = $_POST['email'];
$code_postal = $_POST['code_postal'];
$ville       = $_POST['ville'];
$pays        = $_POST['pays'];


$sql = "INSERT INTO membres (prenom, code_postal, ville, pays, email) VALUES ('$prenom', '$code_postal', '$ville', '$pays', '$email')";
mysqli_query($dblink, $sql);