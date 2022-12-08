<?php


/* function salut($nom){
    echo 'comment ça va?'.' '.$nom;
}

salut('Gabin'); */

function bj($prenom=null){
    if ($prenom===null) {
        return "Bonjour\n";
    }
    else
    return "Bonjour"." ".$prenom."\n";
}
echo bj();
echo bj("Gabin");


?>