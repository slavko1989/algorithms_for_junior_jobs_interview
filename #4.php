<?php

/*Za ovaj algoritam koristicemo funkciju abs(). Abs se koristi za dobijanje aposlutne vrednosti broja,
bez obzira da li je pozitivan ili negativan.
Napisati php program koji proverava da li je broj unutar opsega od 10 do 100 ili 200
i vratiti true.*/

function isWithRange($number){
	if(abs(100-$number)<=10 || abs(200-$number)<=10){
		return true;
	}else{
		return false;
	}
}

$testNumber = 95;

if(isWithRange(95)){
	echo "Broj je unutar 10 do 100 ili 200";
}else{

	echo "Broj nije unutar 10 do 100 ili 200";
}

var_dump(isWithRange(95));
var_dump(isWithRange(34));
var_dump(isWithRange(20));