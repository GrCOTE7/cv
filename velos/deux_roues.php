<?php

/**
 * Created by PhpStorm.
 * User: cote
 * Date: 13/02/17
 * Time: 04:34
 */
class deux_roues
{
    var $couleur;
    var $taille = 'adulte';
    var $etat   = 'est arrêté';

    function __construct($couleur, $taille, $etat)
    {
        $this->couleur = $couleur;
        $this->taille  = $taille;
        $this->etat    = $etat;
    }

    function affiche()
    {
        echo 'Mon deux-roues ' . $this->couleur;
    }

    function rouletil()
    {
        echo $this->etat;
        $moment       = strftime("%A %e %B %Y à %H %M");
        $this->moment = $moment;
        echo 'Ce deux-roues ' . $this->etat . ' le ' . $this->moment;
    }
}

$monDeuxRoues = new deux_roues('vert', 'enfant', 'roule');
$monDeuxRoues->affiche();
echo '<br>';
$monDeuxRoues->rouletil();