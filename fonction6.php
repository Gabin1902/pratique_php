<?php

function oui_non($phrase){
    while (true) {

        $reponse=readline($phrase."o(ui)-n(on) \n");
        
        if($reponse==='n'){
            return "Faux\n";
        }
        if ($reponse==='o') {
            return "Vrai\n";
        }
        
    }


} 


$retour=oui_non("Voulez vous continuez? ");
echo $retour;
?>