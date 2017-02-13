<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<p>Pour vous inscritre dans le Club, nous avons besoin de quelques renseignements. Préparez un nom d'usage pour le Club
    et un mot de passe de 8 caractères au moins, dont vous vous souviendrez facilement.</p>

<form action="inscription_p2" method="POST" name="page_1">
    <table cellspacing="2" cellpadding="2" border="0">
        <tr>
            <td>Votre prénom</td>
            <td><input type="TEXT" name="prenom"></td>
        </tr>

        <tr>
            <td>Votre adresse email</td>
            <td><input type="TEXT" name="prenom"></td>
        </tr>

        <tr>
            <td>Votre code postal</td>
            <td><input type="TEXT" name="code_postal"></td>
        </tr>

        <tr>
            <td>Votre ville</td>
            <td><input type="TEXT" name="ville"></td>
        </tr>

        <tr>
            <td>Votre pays</td>
            <td><?php
                include_once 'inc/connection.inc.php';

                $sql = 'SELECT * FROM pays ORDER BY nom';

                $resultat = mysqli_query($dblink, $sql);

                echo '<select name="pays">';
                echo '<option value="" selected>Choisissez votre pays</option>';
                while ($rang = mysqli_fetch_array($resultat)) {
                    $code = $rang['code'];
                    $nom  = $rang['nom'];
                    echo '<option value="' . $code . '">' . $nom . '</option>' . "\n";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Je m'inscris"></td>
        </tr>

    </table>
</form>

</body>
</html>