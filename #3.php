<?php

/*
Napisati php algoritam gde cemo proveriti dva data intigera i vratiti true
ako je jedan od njih jednak 30 ili rezultat njihov je 30

*/


function test($x,$y){
	

	if($x == 30){
	return true;
	}elseif($y==30){
	
	return true;
	}elseif($x+$y=30){
		return true;
	}else{
		return false;
	}
}

var_dump(test(25,5));
var_dump(test(24,5));
var_dump(test(30,30));