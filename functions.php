<?php



function returncoins($basecoin)
{
$endpoint = 'http://www.coinchoose.com/api.php?base='.$basecoin.'';
$session = curl_init($endpoint);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($session);
curl_close($session);
$results = json_decode($data);
if ($results === NULL) die('Error parsing json');

foreach ($results as $result) {
	 echo '<tr>
      <td>'.$result->name.' ['.$result->symbol.']</td>
      <td>'.$result->algo.'</td>
      <td>'.$result->difficulty.'</td>
	  <td>'.round($result->avgProfit,2).'</td>
      <td>'.$result->price.' BTC </td>';
$var1 = returnsources($result->symbol);
$var2 = returnconf($result->symbol);
if (empty($var1)) {
    echo '<td>Coming Soon</td>'; }
	else {	
	  echo '<td><a href="cryptomining-step2.php?coin='.$result->symbol.'&miningtype=solo&capital='.$var2.'solo&name='.$result->name.'" title="Mine '.$result->name.' solo in a virtual machine in 5 minutes from now">Solo</a> - Pool</td>'; 
	}  
 echo  '</tr>'; 
} 
 

}


function returnsources($coin) {
	switch ($coin) {
    case 'GLX':
       return "https://github.com/icecube45/galaxycoin/archive/master.zip";
        break;
		    case 'DMD':
       return "https://github.com/DMDcoin/dmd-old/archive/master.zip";
        break;
		    case 'SXC':
       return "https://github.com/sexcoin-project/sexcoin/archive/master.zip";
        break;
		    case 'FRK':
       return "https://github.com/franko-org/franko/archive/master-0.8.zip";
        break;
		    case 'CMC':
       return "https://github.com/cosmoscoin/cosmoscoin/archive/master.zip";
        break;
		    case 'LKY':
       return "https://github.com/bitcoin-abe/bitcoin-abe/archive/master.zip";
        break;
		    case 'GLC':
       return "https://github.com/CryptoParts/GlobalCoin/archive/master.zip";
        break;
		    case 'FTC':
       return "https://github.com/FeatherCoin/Feathercoin/archive/master-0.8.zip";
        break;
		    case 'PXC':
       return "https://github.com/ghostlander/Phoenixcoin/archive/master.zip";
        break;
		    case 'GLD':
       return "https://github.com/goldcoin/gldcoin/archive/master.zip";
        break;
		    case 'NEC':
       return "";
        break;
		    case 'CHN':
       return "https://github.com/CHNCoin/CHNCoin/archive/master.zip";
        break;
		    case 'ANC':
       return "https://github.com/Anoncoin/anoncoin/archive/master.zip";
        break;
		    case 'CAP':
       return "https://github.com/bottlecaps-foundation/bottlecaps/archive/master.zip";
        break;
		    case 'BTB':
       return "https://github.com/aLQ/bitbar/archive/master.zip";
        break;
		    case 'ORB':
       return "https://github.com/Orbitcoin/Orbitcoin/archive/master.zip";
        break;
		    case 'CRC':
       return "https://github.com/craftcoin/craftcoin/archive/master.zip";
        break;
		    case 'DGD':
       return "";
        break;
		    case 'AMC':
       return "";
        break;
		    case 'LTC':
       return "https://github.com/litecoin-project/litecoin/archive/master-0.8.zip";
        break;
 	    case 'PHS':
       return "https://github.com/philosopherstonecoin/philosopherstone/archive/master.zip";
        break;
			    case 'SBC':
       return "https://github.com/stablecoin/stablecoin-qt/archive/master.zip";
        break;
			    case 'FST':
       return "https://github.com/fastcoinproject/fastcoin/archive/fastcoin-8.5.3-irc.zip";
        break;
			    case 'HBN':
       return "https://github.com/Crypto-Expert/HoboNickels/archive/master.zip";
        break;
			    case 'MEC':
       return "https://github.com/megacoin/megacoin/archive/master.zip";
        break;
			    case 'DOGE':
       return "https://github.com/dogecoin/dogecoin/archive/master.zip";
        break;
			    case 'ARG':
       return "";
        break;
			    case 'NVC':
       return "https://github.com/novacoin-project/novacoin/archive/master.zip";
        break;
			    case 'ELC':
       return "https://github.com/elacoin/elacoin/archive/master.zip";
        break;
			    case 'NBL':
       return "https://github.com/getnibble/nibble/archive/master.zip";
        break;
			    case 'BQC':
       return "";
        break;
			    case 'IFC':
       return "";
        break;
			    case 'RYC':
       return "";
        break;
			    case 'MNC':
       return "https://github.com/vipah/mincoin/archive/master.zip";
        break;
			    case 'EAC':
       return "";
        break;
			    case 'GDC':
       return "";
        break;
			    case 'EZC':
       return "";
        break;
			    case 'CGB':
       return "";
        break;
			    case 'STR':
       return "";
        break;
			    case 'ALF':
       return "";
        break;
			    case 'SPT':
       return "";
        break;
			    case 'NRB':
       return "";
        break;
			    case 'JKC':
       return "";
        break;
			    case 'RED':
       return "";
        break;
					    case 'ELP':
       return "";
        break;
					    case 'UNO':
       return "";
        break;
					    case 'EXC':
       return "";
        break;
     case 'BTC':
       return "";
        break;
     default : return "";
	break;
 }
}


function returnconf($coin) {
	switch ($coin) {
    case 'GLX':
       return "0";
        break;
		    case 'DMD':
       return "1";
        break;
		    case 'SXC':
       return "";
        break;
		    case 'FRK':
       return "";
        break;
		    case 'CMC':
       return "";
        break;
		    case 'LKY':
       return "";
        break;
		    case 'GLC':
       return "";
        break;
		    case 'FTC':
       return "";
        break;
		    case 'PXC':
       return "";
        break;
		    case 'GLD':
       return "";
        break;
		    case 'NEC':
       return "";
        break;
		    case 'CHN':
       return "";
        break;
		    case 'ANC':
       return "";
        break;
		    case 'CAP':
       return "";
        break;
		    case 'BTB':
       return "";
        break;
		    case 'ORB':
       return "";
        break;
		    case 'CRC':
       return "";
        break;
		    case 'DGD':
       return "";
        break;
		    case 'AMC':
       return "";
        break;
		    case 'LTC':
       return "";
        break;
		    case 'PHS':
       return "";
        break;
 	    case 'PHS':
       return "";
        break;
			    case 'SBC':
       return "";
        break;
			    case 'FST':
       return "";
        break;
			    case 'HBN':
       return "";
        break;
			    case 'MEC':
       return "";
        break;
			    case 'DOGE':
       return "";
        break;
			    case 'ARG':
       return "";
        break;
			    case 'NVC':
       return "";
        break;
			    case 'ELC':
       return "";
        break;
			    case 'NBL':
       return "";
        break;
			    case 'BQC':
       return "";
        break;
			    case 'IFC':
       return "";
        break;
			    case 'RYC':
       return "";
        break;
			    case 'MNC':
       return "";
        break;
			    case 'EAC':
       return "";
        break;
			    case 'GDC':
       return "";
        break;
			    case 'EZC':
       return "";
        break;
			    case 'CGB':
       return "";
        break;
			    case 'STR':
       return "";
        break;
			    case 'ALF':
       return "";
        break;
			    case 'SPT':
       return "";
        break;
			    case 'NRB':
       return "";
        break;
			    case 'JKC':
       return "";
        break;
			    case 'RED':
       return "";
        break;
					    case 'ELP':
       return "";
        break;
					    case 'UNO':
       return "";
        break;
					    case 'EXC':
       return "";
        break;
     case 'BTC':
       return "";
        break;
     default : return "";
	break;
 }
}


function localmysqldbconnect(){
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'izante_altcoin'); 	
mysql_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die(mysql_error()); mysql_select_db(DB_DATABASE) or die(mysql_error()); 	   
mysql_set_charset('utf8');
}


function insertcoin($shortname,$sname,$algo,$difficulty,$profitability,$price,$priceusd,$priceeur) {
$data = mysql_query("UPDATE coin SET sname = '$sname',algo = '$algo',difficulty = '$difficulty',price = '$price',priceusd = '$priceusd',priceeur = '$priceeur',profitability = '$profitability' WHERE shortname = '$shortname'");
}

function insertcoin2($shortname,$sname,$algo,$difficulty,$profitability,$price,$priceusd,$priceeur) {
	error_reporting(E_ALL);
$data = mysql_query("INSERT INTO coin (shortname,sname,algo,difficulty,profitability,price,enabled,name,priceusd,priceeur) VALUES ('$shortname','$sname','$algo','$difficulty','$profitability','$price','0','$sname','$priceusd','$priceeur')");
if ( $data === false ){
    echo mysql_error() ;
}
}

function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    return curl_exec($ch);
    curl_close ($ch);
}

function getcoinlist() {
$data = mysql_query("Select * from coin where enabled = '1' order by price desc ");
while($info = mysql_fetch_array($data)) 
 {  
 echo '<tr>
      <td>'.$info['sname'].' ['.$info['shortname'].']</td>
      <td>'.$info['algo'].'</td>
      <td>'.$info['difficulty'].'</td>
	  <td>'.round($info['profitability'],2).'</td>
      <td>'.$info['price'].' BTC </td>
	  <td>'.$info['priceusd'].' $ </td>
	  <td>'.$info['priceeur'].' € </td>';
	  
	switch ($info['enabled']) {
    case 0:
        echo "<td>Mining Guide Coming Soon</td>";
        break;
    case 1:
         echo '<td><a href="guide1.php?coin='.$info['name'].'" title="Mine '.$info['shortname'].' in a virtual machine in 5 minutes from now">Quick Mining Guide</a></td>';
        break;
 }
 
	 
   echo  '</tr>'; 

  }  	
}


function getcoinlistsoon() {
$data = mysql_query("Select * from coin where enabled = '0' order by price desc ");
while($info = mysql_fetch_array($data)) 
 {  
 echo '<tr>
      <td>'.$info['sname'].' ['.$info['shortname'].']</td>
      <td>'.$info['algo'].'</td>
      <td>'.$info['difficulty'].'</td>
	   <td>'.round($info['profitability'],2).'</td>
      <td>'.$info['price'].' BTC </td>
	  <td>'.$info['priceusd'].' $ </td>
	  <td>'.$info['priceeur'].' € </td>';
	  
	switch ($info['enabled']) {
    case 0:
        echo "<td>Mining Guide Coming Soon</td>";
        break;
    case 1:
         echo '<td><a href="guide1.php?coin='.$info['name'].'" title="Mine '.$info['shortname'].' in a virtual machine in 5 minutes from now">Quick Mining Guide</a></td>';
        break;
 }
 
	 
   echo  '</tr>'; 

  }  	
}


function getcoinlistminetypes($coin) {
$data = mysql_query("Select * from coin where name = '$coin' order by name ASC");
while($info = mysql_fetch_array($data)) 
 {  
 echo '<br>
 <a href="guide2.php?coinid='.$info['id'].'&coin='.$info['name'].'" >Mine '.$info['name'].' ['.$info['shortname'].'] in <b>'.$info['miningstyle'].'</b> mode</a></br>';
  }  	
}


function generatesh($payoutaddress,$cores,$coinid) {
$data = mysql_query("Select * from coin where id = '$coinid' LIMIT 1");
while($info = mysql_fetch_array($data)) 
 { 
$name=$info['name'];
$daemon=$info['daemon'];
$source=$info['source'];
$unzipcommand=$info['unzipcommand'];
$node=$info['node1'];
$srcdir=$info['srcdir'];
$poolip=$info['poolip'];
$poolport=$info['poolport'];
$filename=$info['filename'];
$miningstyle=$info['miningstyle'];

switch ($miningstyle) {
    case 'solo':
$new = "\n";	
$thefile = 
'sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile '.$new.
'sudo rm ~/.'.$name.'/'.$name.'.conf' .$new.
'sudo mkdir ~/.'.$name.''.$new.'
echo "rpcuser=user '.$new.'
rpcpassword=pass '.$new.'
gen=1 '.$new.'
listen=1 '.$new.'
rpcallowip=127.0.0.1 '.$new.'
rpcuser=username '.$new.'
rpcpassword=password '.$new.'
rpcport=8777 '.$new.'
server=1 '.$new.'
daemon=1 '.$new.'
genproclimit='.$cores.'" | sudo tee -a ~/.'.$name.'/'.$name.'.conf '.$new.'
sudo apt-get update '.$new.		
'sudo apt-get install bzip2 -y '.$new.	
'sudo apt-get install git -y '.$new.	
'sudo apt-get install git-core -y '.$new.		
'sudo apt-get install subversion -y '.$new.		
'sudo apt-get install checkinstall -y '.$new.		
'sudo apt-get install build-essential -y '.$new.		
'sudo apt-get install libssl-dev -y '.$new.		
'sudo apt-get install libboost-all-dev -y '.$new.		
'sudo apt-get install libdb5.1-dev -y '.$new.		
'sudo apt-get install libdb5.1++-dev -y '.$new.		
'sudo apt-get install libgtk2.0-dev -y '.$new.		
'sudo apt-get install libgmp3-dev -y '.$new.
'sudo apt-get install unzip -y '.$new.
'wget -O dafile '.$source.' '.$new.
'sudo '.$unzipcommand.' '.$new.
'sudo rm script.sh '.$new.
'sudo rm dafile '.$new.
'cd '.$srcdir.' '.$new.
'sudo make -f makefile.unix USE_UPNP=- '.$new.
'sudo ./'.$daemon.' &'.$new.		
$thefile .= "sudo watch -d -n 3600 './".$daemon." sendtoaddress ".$payoutaddress." 5' & ".$new."";			
$thefile .= "sudo watch -d -n 5 './".$daemon." getmininginfo && ./".$daemon." getdifficulty && ./".$daemon." getbalance && ./".$daemon." listtransactions \"*\" 1 0 '";		
$filenamesave = 'd/'.$payoutaddress.'.sh';
file_put_contents($filenamesave, $thefile);
        break;
		

        break;
    case 'pool':	
$new = "\n";	
$thefile = 
'sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile '.$new.
'sudo rm ~/.'.$name.'/'.$name.'.conf' .$new.
'sudo mkdir ~/.'.$name.''.$new.'
echo "rpcuser=user '.$new.'
rpcpassword=pass '.$new.'
gen=1 '.$new.'
genproclimit='.$cores.'" | sudo tee -a ~/.'.$name.'/'.$name.'.conf '.$new.'
sudo apt-get update '.$new.		
'sudo apt-get install bzip2 -y '.$new.	
'sudo apt-get install git -y '.$new.	
'sudo apt-get install git-core -y '.$new.		
'sudo apt-get install subversion -y '.$new.		
'sudo apt-get install checkinstall -y '.$new.		
'sudo apt-get install build-essential -y '.$new.		
'sudo apt-get install libssl-dev -y '.$new.		
'sudo apt-get install libboost-all-dev -y '.$new.		
'sudo apt-get install libdb5.1-dev -y '.$new.		
'sudo apt-get install libdb5.1++-dev -y '.$new.		
'sudo apt-get install libgtk2.0-dev -y '.$new.		
'sudo apt-get install libgmp3-dev -y '.$new.
'sudo apt-get install unzip -y '.$new.
'sudo apt-get install yasm '.$new.
'wget -O dafile '.$source.' '.$new.
'sudo '.$unzipcommand.' '.$new.
'sudo rm script.sh '.$new.
'sudo rm dafile '.$new.
'cd '.$srcdir.' '.$new.
'sudo make -f makefile.unix USE_UPNP=- '.$new.''; 

if ($daemon == 'ptsminer') {$thefile .= 'sudo ./'.$daemon.' '.$payoutaddress.' 8 27 sse4'.$new.'';};
if ($daemon != 'ptsminer') {$thefile .= 'sudo ./'.$daemon.' -pooluser='.$payoutaddress.' -poolpassword=0 -poolip='.$poolip.' -poolport='.$poolport.' & '.$new.'';};
			
$thefile .= "sudo watch -d -n 5 './".$daemon." getmininginfo && ./".$daemon." getdifficulty && ./".$daemon." listtransactions \"*\" 1 0 '";		
$filenamesave = 'd/'.$payoutaddress.'.sh';
file_put_contents($filenamesave, $thefile);
        break;

}

  }  	
  

	
}





function generatecoinsh($payoutaddress,$cores,$coin,$name,$capital) {	
switch ($capital) {
   		case 0:
$name = strtolower($name);
		break;
   		case 1:
$name = ucfirst(strtolower($name));
        break;
}		

$new = "\n";
$l1 = 'sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile'.$new;
$l2 = 'apt-get update '.$new;
$l3 = 'sudo mkdir ~/.'.$name.''.$new;
$l4 = 'echo "rpcuser=user '.$new.'rpcpassword=pass '.$new.'gen=1 '.$new.'listen=1 '.$new.'rpcallowip=127.0.0.1 '.$new.'rpcuser=username '.$new.'rpcpassword=password '.$new.'rpcport=8777 '.$new.'server=1 '.$new.'daemon=1 '.$new.'genproclimit='.$cores.'" | sudo tee -a ~/.'.$name.'/'.$name.'.conf '.$new.'';
$l5 = 'apt-get install bzip2 git git-core subversion checkinstall build-essential libssl-dev libboost-all-dev libdb5.1-dev libdb5.1++-dev libgtk2.0-dev libgmp3-dev unzip make g++ libminiupnpc-dev qtchooser -y  '.$new;
$l6 = 'wget -O dafile '.returnsources($coin).' '.$new;
$l7 = 'unzip dafile '.$new;
$l8 = 'cd $(find -maxdepth 2 -type d -name src) '.$new;
$l9 = 'make -f makefile.unix USE_UPNP=- '.$new;
$l10 = '$(find . -maxdepth 1 -perm -111 -type f) &'.$new;
$l11 = "watch -d -n 3600 '$(find . -maxdepth 1 -perm -111 -type f) sendtoaddress ".$payoutaddress." 1' & ".$new."";			
$l12 = "watch -d -n 5 '$(find . -maxdepth 1 -perm -111 -type f) getmininginfo && $(find . -maxdepth 1 -perm -111 -type f) getdifficulty && $(find . -maxdepth 1 -perm -111 -type f) getbalance && $(find . -maxdepth 1 -perm -111 -type f) listtransactions \"*\" 1 0 '";		
$thefile = $l1.$l3.$l4.$l5.$l6.$l7.$l8.$l9.$l10.$l11.$l12;
$filenamesave = 'd/'.$payoutaddress.'.sh';
file_put_contents($filenamesave, $thefile);	
}






function generatesh1($username,$scriptname) {
$new = "\n";	
$thefile = file_get_contents("scripts/".$scriptname.".sh");
$thefile .= 'echo "'.$username.'" >> /root/minecraft/ops.txt'.$new.''	;
$thefile .= "shutdown -r now";		
$filenamesave = 'd/'.$username.'.sh';
file_put_contents($filenamesave, $thefile);
	
}


function generatesh2($username,$scriptname) {
$new = "\n";	
$thefile = file_get_contents("scripts/".$scriptname.".sh");
$thefile .= 'echo "'.$username.'" >> /root/minecraft/ops.txt'.$new.''	;
$thefile .= "shutdown -r now";		
$filenamesave = 'd/'.$username.'.sh';
file_put_contents($filenamesave, $thefile);
	
}


function constructsh($durl,$dusername,$dtype,$sh) {
$l1 = "sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile";
$l2 = "sudo apt-get update";
$l3 = "sudo apt-get install default-jdk -y ";
$l4 = "sudo apt-get install screen -y ";
$l5 = "sudo apt-get install unzip -y ";
$l6 = "sudo mkdir a";
$l7 = "cd a ";
$l8 = "wget http://www.creeperrepo.net/FTB2/modpacks%5ESlowsStreamPack%5E1_0_0%5ESlowsStreamPackServer.zip -O a.zip ";
$l9 = "sudo unzip a.zip ";
$l10 = "sudo rm a.zip";
$l11 = 'echo "cd /root/a/';
$l12 = 'screen -d -m java -Xmx1500M -Xms1500M -jar ftbserver.jar nogui" | tee -a a.sh';
$l13 = "sudo chmod u+x a.sh";
$l14 = "sudo cp /root/a/a.sh /etc/init.d/b.sh ";
$l15 = "sudo chmod u+x /etc/init.d/b.sh ";
$l16 = "cd /etc/init.d/ ";
$l17 = "sudo update-rc.d b.sh defaults ";	
$new = "\n";
switch ($dtype) {
    case 0:
$thefile = $l3.$new.$l4.$new.$l5.$new.$l6.$new.$l7.$new."wget ".$durl." -O a.zip ".$new.$l9.$new."sudo cp /root/a/".$sh.".sh /root/a/a.sh ".$new.$l13.$new.$l14.$new.$l15.$new.$l16.$new.$l17.$new;
$thefile .= 'echo "'.$dusername.'" >> /root/minecraft/ops.txt'.$new.'';
		break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;	
}		
			
$thefile .= "shutdown -r now";	
$filenamesave = 'd/'.$dusername.'.sh';		
file_put_contents($filenamesave, $thefile);
	


}
?>