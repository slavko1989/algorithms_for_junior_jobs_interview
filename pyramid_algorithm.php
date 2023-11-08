<?php
/*Algoritam  kako bi se se generisala piramida sa zvezdicama.
Svako $i u spoljnoj petlji predstavlja red u piramidi.
Na pocetku $i je 0, pa prvi red ima jednu zvezdicu, i tako redom.
Unutrasnja petlja se koristi da se ispise odgovarajuci broj zvezdica za svaki red.
Na primer ako je $i = 2, unutrasnja petlja ispisace 3 zvezdice (0,1,2).
Kada unutrasnja petlja zavrsi, prelazi u novi red pomocu "\n". Na kraju kada spoljna petlja zavrsi, cela piramida bice ispisana.*/

function pyramid($n){

	for($i = 0; $i < $n; $i++){

		for($j = 0; $j <= $i; $j++){

			echo "* ";
		}
		echo "\n";
	}
}
$n = 5;
pyramid($n);


