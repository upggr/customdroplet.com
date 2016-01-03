sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile 
sudo apt-get update
sudo apt-get install default-jdk -y 
sudo apt-get install screen -y 
sudo apt-get install unzip -y 
sudo mkdir minecraft 
cd minecraft 
wget http://www.creeperrepo.net/FTB2/modpacks%5EFTBLite2%5E1_1_9%5EFTBLite2Server.zip -O minecraft.zip 
sudo unzip minecraft.zip 
sudo rm minecraft.zip 
sudo rm ServerStartCustom.sh 
sudo rm /etc/init.d/MinecraftStart.sh 
echo "cd /root/minecraft/ 
screen -d -m java -Xmx1500M -Xms1500M -jar ftbserver.jar nogui" | tee -a ServerStartCustom.sh 
sudo chmod u+x ServerStartCustom.sh 
sudo cp /root/minecraft/ServerStartCustom.sh /etc/init.d/MinecraftStart.sh 
sudo chmod u+x /etc/init.d/MinecraftStart.sh 
cd /etc/init.d/ 
sudo update-rc.d MinecraftStart.sh defaults 
