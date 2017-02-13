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

if (!$id_link = mysql_connect($hostname, $username, $password)) {
    echo 'Cnx impossible à MySQL';
    exit;
}

if (!mysql_select_db($db, $id_link)) {
    echo 'Sélection de la BdD (' . $db . ') impossible';
}
