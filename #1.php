<?php


/*

Kod sadrzi funkciju test koja uzima dva argumenta x i y.
Algoritam uporedjuje dva vrednosti da li su jednake. Koristimo ternarni operator za uporedjivanje izraza ? 
Ako jesu funkcija ce izracunati x+y * 3, i vratiti taj rezultat.
Ako izraz nije tacan funkcija ce vratiti samo zbir dve vrednosti.

*/
function test($x,$y){
	return $x == $y ? ($x + $y) *  3 : $x + $y;
}

echo test(1,2)."\n";
echo test(3,2)."\n";
echo test(2,2)."\n";