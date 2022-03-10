<?php


function securite($a){
    $resultat = htmlspecialchars(strip_tags(trim($a)));
    return $resultat;
}