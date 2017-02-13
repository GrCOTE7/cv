<?php
/**
 * Created by PhpStorm.
 * User: cote
 * Date: 13/02/17
 * Time: 02:49
 */
include_once '../inc/connection.inc.php';

$sql = 'SELECT * FROM pays ORDER BY nom';

$resultat = mysqli_query($dblink, $sql);

echo '<select name="pays">';
echo '<option value="" selected>Choisissez votre pays</option>';
while ($rang = mysqli_fetch_array($resultat)) {
    $code = $rang['code'];
    $nom  = $rang['nom'];
    echo '<option value="'.$code.'">'.$nom.'</option>'."\n";
}