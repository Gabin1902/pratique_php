<?php
$note=(int)readline();
if ($note>10) {
    echo "Vous avez la moyenne\n";
}
elseif($note===10){
    echo "Vous avez juste la moyenne\n";
}
else echo "Vous n'avez pas la moyenne\n";

?>