<?php
include("functions.php");
$json1 = '['.file_get_contents('https://api.bitcoinaverage.com/ticker/USD').']';
$result1 = json_decode($json1);
foreach($result1 as $key1 => $value1) {
    if($value1) {			
$priceusd1 = $value1->last;
echo $priceusd;
echo '<br>';
    }
}
	
	$json2 = '['.file_get_contents('https://api.bitcoinaverage.com/ticker/EUR').']';
$result2 = json_decode($json2);
foreach($result2 as $key2 => $value2) {
    if($value2) {			
$priceeur1 = $value2->last;
echo $priceeur;
echo '<br>';
    }
}
	
localmysqldbconnect();
$json = file_get_contents('http://www.coinchoose.com/api.php?base=BTC');
$result = json_decode($json);
foreach($result as $key => $value) {
    if($value) {		
		
$minblocktime = $value->minBlockTime;
$shortname =  $value->symbol;
$sname =  $value->name;
$algo =  $value->algo;
$difficulty =  $value->difficulty;
$price =  $value->price;
$priceusd = $price * $priceusd1;
$priceeur = $price * $priceeur1;
echo $price;
echo '<br>';
echo $minblocktime;
echo '<br>';
echo $shortname;
echo '<br>';
echo $sname;
echo '<br>';
echo $algo ;
echo '<br>';
echo $difficulty ;

insertcoin($shortname,$minblocktime,$sname,$algo,$difficulty,$price,$priceusd,$priceeur);
error_reporting(E_ALL);
    }
}

?>