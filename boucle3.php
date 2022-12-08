<?php

$tableau=[
    
        'ci'=>['Gabin','dji'],
        'cp'=>['EKOUDON','ADO']
    
    
];

foreach ($tableau as $key=>$table) {
    echo $key.":\n";
    foreach ($table as $ke => $tabl) {
        echo "-".$tabl."\n";
    }
    
}
?>