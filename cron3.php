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
$json = file_get_contents('coinwars.php');
$result = json_decode($json);
foreach($result as $key => $value) {
    if($value) {		
$shortname =  $value->CoinTag;
$sname =  $value->CoinName;
$algo =  $value->Algorithm;
$difficulty =  $value->Difficulty;

switch ($shortname) {
    case 'BTC':
$price =  '1';
$priceusd = $value->ExchangeRate;
$priceeur = $price * $priceeur1;
        break;
    default:
$price =  $value->ExchangeRate;
$priceusd = $value->ExchangeRate;
$priceeur = $price * $priceeur1;
        break;
 }
echo '<br>';
echo '-----';
echo '<br>';
echo $price;
echo '<br>';
echo $shortname;
echo '<br>';
echo $sname;
echo '<br>';
echo $algo ;
echo '<br>';
echo $difficulty ;
echo '<br>';
echo '-----';
echo '<br>';
echo '<br>';
insertcoin($shortname,$sname,$algo,$difficulty,$price,$priceusd,$priceeur);
error_reporting(E_ALL);
    }
}

?>