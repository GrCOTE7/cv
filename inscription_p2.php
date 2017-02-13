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
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<p>Veuillez maintenant choisir le nom d'usage que vous porterez dans le Club et le mot de passe pour y accéder. Vous pourrez ainsi rencontrer d'autres membres et modifier votre profil, voire le supprimer éventuellement.</p>

<form action="traitement_id.php" method="POST" name="page_2">
    <table cellspacing="2" cellpadding="2" border="0">
        <tr>
            <td>Votre pseudo</td>
            <td><input type="TEXT" name="pseudo"></td>
        </tr>

        <tr>
            <td>Votre mot de passe</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
            <td>Retapez votre mot de passe</td>
            <td><input type="password" name="passwordbis"></td>
        </tr>

        <tr>
            <td>Votre question secrète en cas d'oubli</td>
            <td><input type="TEXT" name="question" placeholder="Quel est le nom de jeune fille de votre mère ?" size="40"></td>
        </tr>

        <tr>
            <td>Votre réponse</td>
            <td><input type="TEXT" name="reponse"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Je valide"></td>
        </tr>

    </table>
</form>

</body>
</html>