<?php
 //Vratiti izraz true ako je broj izmedju 100 i 2000

function test($x,$y,$z){

		if($z >= $x  && $z <= $y){
			return true;
		}else{
			return false;
		}
}
var_dump(test(100,200,101));
var_dump(test(100,200,99));
