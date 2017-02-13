<?php
/**
 * Created by PhpStorm.
 * User: cote
 * Date: 13/02/17
 * Time: 02:30
 */

$db       = 't_clubvivants';
$hostname = 'localhost';
$username = 'root';
$password = '';

if (!$dblink = mysqli_connect($hostname, $username, $password, $db)) {
    echo 'Cnx impossible à MySQL';
    exit;
}

if (!mysqli_set_charset($dblink, "utf8")) {
    printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($dblink));
    exit();
} else {
//    printf("Jeu de caractères courant : %s\n", mysqli_character_set_name($dblink));
}
