<?php



 /*PHP program koji će ukloniti karakter na datoj poziciji u datom stringu. Pozicija koja je data treba biti u rasponu od 0 do dužine stringa - 1 (uključujući granice)*/

function test($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test("Python", 1)."\n";
echo test("Python", 0)."\n";
echo test("Python", 4)."\n";
