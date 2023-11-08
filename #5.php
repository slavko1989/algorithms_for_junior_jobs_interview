<?php


/*Napisati php program gde cemo kreirati novi string gde IF dodajemo na prednji deo datog stringa.
Ako string vec pocinje sa IF vracamo rezultat nepromenjen.
STRLEN koristi se za dobijanje duzine niza.
SUBSTR koristi se za izdvajanje podniza iz datog string
primera radi, zadajemo orginalni string,pocetnu poziciju odakle zelimo da izdvojimo niz
i broj znakova koji zelimo da izdvojimo. */




function string($string){
	if(strlen($string) >=2 && substr($string,0,2) == "if"){
		return $string;
	}
	return "if ".$string;
}

echo string("if else")."\n";
echo string("else")."\n";
echo string("if")."\n";  ?>