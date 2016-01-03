<?php 
include("functions.php"); 
error_reporting(E_ALL);
localmysqldbconnect();
    $coins = simplexml_load_file('http://feed43.com/izante-btc.xml');
    foreach ($coins->channel->item as $coininfo):
	        $coin=$coininfo->title;
        $price=substr($coininfo->link,42,-6);
updatecoinprice($coin,$price);
    echo ''.$coin.'-'.$price.'<br>';
    endforeach;
	

?>	
