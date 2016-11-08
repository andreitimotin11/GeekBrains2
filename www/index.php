<?php
/*
 * Functions and arrays
 *
 */

$i = 1;
while($i <= 100){
	if($i % 3 == 0){
		echo $i . "<br>";
	}
	$i++;
}
/* Cream masiv din n elemente aleatorii si le
*  sortam in ordine descrescatoare
*/
function getArray(){
	$n = rand(1, 100);
	for($i=0; $i < $n ; $i++){
		$arr[$i] = rand(0, 1000);
	}
	return $arr;
}
$arr = getArray();
//var_dump($arr);
arsort($arr);
$q = 0;
echo "<h2>";
foreach ($arr as $v){

	if( $q++ % 5 == 0)echo "<br>";
	echo $v . ", ";
}