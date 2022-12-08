<?php
$heure=(int)readline("L'heure: ");
if (!(($heure>=7 && $heure<=12) || ($heure>=14 && $heure<=18))) {
    echo("Heure de boulot\n");
}
else echo("Heure de pause\n");
?>