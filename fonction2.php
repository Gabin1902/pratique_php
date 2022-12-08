<?php

/* $note=[14,13,20,19,10];
array_push($note,55,100,4);

print_r($note);
print_r(array_reverse($note));
sort($note);
print_r($note);

echo (array_sum($note))/count($note); */


$tableau=[];
$note=null;
while ($note!=='') {
    $note=readline();
    $tableau[]=(int)$note;
    

}
exit('Fin du programme');
echo round((array_sum($tableau))/(count($tableau)-1));
?>