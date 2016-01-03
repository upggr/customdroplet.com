<?php
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

?>




 



