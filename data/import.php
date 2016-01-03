<?php

$json = file_get_contents('http://www.coinchoose.com/api.php?base=BTC');
$result = json_decode($json);
foreach($result as $key => $value) {
    if($value) {		
$shortname =  $value->symbol;
$sname =  $value->name;
$algo =  $value->algo;
$difficulty =  $value->difficulty;
$profitability = $value->avgProfit;
$price =  $value->price;
$priceusd = $price * $priceusd1;
$priceeur = $price * $priceeur1;

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
echo $priceusd ;
echo '<br>';
echo $priceeur ;
echo '<br>';
echo $profitability ;
echo '<br>';
echo '-----';
echo '<br>';
echo '<br>';
	}
}
?>