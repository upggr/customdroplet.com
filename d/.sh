sudo dd if=/dev/zero of=/swapfile bs=64M count=16; sudo mkswap /swapfile; sudo swapon /swapfile 
sudo rm ~/.primecoin/primecoin.conf
sudo mkdir ~/.primecoin

echo "rpcuser=user 

rpcpassword=pass 

gen=1 

genproclimit=-1" | sudo tee -a ~/.primecoin/primecoin.conf 

sudo apt-get update 
sudo apt-get install bzip2 -y 
sudo apt-get install git -y 
sudo apt-get install git-core -y 
sudo apt-get install subversion -y 
sudo apt-get install checkinstall -y 
sudo apt-get install build-essential -y 
sudo apt-get install libssl-dev -y 
sudo apt-get install libboost-all-dev -y 
sudo apt-get install libdb5.1-dev -y 
sudo apt-get install libdb5.1++-dev -y 
sudo apt-get install libgtk2.0-dev -y 
sudo apt-get install libgmp3-dev -y 
sudo apt-get install unzip -y 
sudo apt-get install yasm 
wget -O dafile http://sourceforge.net/projects/primecoin-hp/files/0.1.2-hp11/primecoin-0.1.2-hp11.tar.bz2/download 
sudo tar jxvf dafile 
sudo rm script.sh 
sudo rm dafile 
cd primecoin-0.1.2-hp11/src/ 
sudo make -f makefile.unix USE_UPNP=- 
sudo ./primecoind -pooluser= -poolpassword=0 -poolip=54.200.248.75 -poolport=1337 & 
sudo watch -d -n 5 './primecoind getmininginfo && ./primecoind getdifficulty && ./primecoind listtransactions "*" 1 0 '