<?php

/* $va=print_r(15);
echo " ".$va; */
/* $va=readline();
var_dump($va); */

$rev=strtolower(readline());

if (strrev($rev)==$rev) {
    echo "Palyndrome\n";
}
else     echo "NON Palyndrome\n";

echo strtoupper(readline());


?>