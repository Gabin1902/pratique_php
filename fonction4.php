<?php
/* for ($i=1; $i <=40 ; $i++) { 
    echo str_repeat("*",$i).str_repeat("*",$i)."\n";

} */


$mot=["Bonjour","Salut"];
foreach ($mot as $mo) {
    echo str_replace(substr($mo,1,strlen($mo)),str_repeat("*",strlen($mo)),$mo)."\n";

}




?>