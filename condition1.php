 <?php

 //$notes=[0,0,0];
 $moyenne=0;

for ($i=0; $i < 3; $i++) { 
    
    $notes[$i]=readline();
    $moyenne+=$notes[$i];

}
echo "moy="; 
echo $moyenne/3, "\n ";

if (($moyenne/3)>10) {
    echo "Vous avez la moyenne\n";
}

else echo "Vous n'avez pas la moyenne\n";





 ?>