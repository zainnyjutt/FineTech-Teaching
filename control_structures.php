<?php
//  === determines the value as well as datatype.
//  ==  compares the value
//   =    intitaes value
//  !=   determines not is equal to
//  && 
//  ||






$battery=55;
if($battery>85){
	echo "Plug Out Charger!";	
} elseif($battery>=30 && $battery<=85){
	echo "Can use the phone";
} else{
	echo "PLUG IN YOUR CHARGER!";
}


?>