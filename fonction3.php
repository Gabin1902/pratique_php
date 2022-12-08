<?php
$taille=null;
$aste=[];
$insultes=["salo", "imbecile", "idiot","bete","con","merde"];

foreach ($insultes as $insulte) {
     

    $aste[]=substr($insulte,0,1).str_repeat("*",strlen($insulte)-1); 

}
$phrase=strtolower(readline("Une phrase "));

$phrase=str_replace($insultes,$aste,$phrase);

echo $phrase;
?>