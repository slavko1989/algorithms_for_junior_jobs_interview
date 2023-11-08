<?php
/*Napisati php program da bi se dobio rezultat izmedju n i 51. Ako je n vece od 51 vraca se vrednost puta 3.

Funkciji test dajemo argument n.
Promenljiva x imace vrednost 51. Sa if naredbom ipistujemo da li je n vece od x, ako jeste neka nam 
vrati taj rezultat sa x3.
Ako nije vece neka vrati sam rezultat x-n*/

function test($n){
	$x = 51;
	if($n>$x){
		return ($n-$x)*3;
	}
	return $x-$n;
}
echo test(53)."\n";
echo test(30)."\n";
echo test(50)."\n";