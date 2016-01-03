<!DOCTYPE HTML>
<html>
	<head>
    
		<title>Personalized Minecraft Server</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<?php include("head.php"); ?>

	</head>
<body class="no-sidebar">

		<!-- Header Wrapper -->
			<?php include("header.php"); ?>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u skel-cell-important">

							<!-- Content -->
								<div id="content">
								  <article class="last">
<?php 
$urlconstruct='http://customdroplet.com/d/'.$_POST['username'].'.sh';
?>
  <?php
  error_reporting(-1);
$durl = "http://customdroplet.com/files/YogscastCompletePack_2871RRYOGS.zip";
$dusername = $_POST['username'];
$dtype = "0";
$sh ="LaunchServer"; 
//echo $username;
//echo $scriptname;
//generatesh2($username,$scriptname);
constructsh($durl,$dusername,$dtype,$sh)
?>
										<h2>Your personalized Easy Linux Guide for Yogcast</h2>
<p>You are ready to go.</p>
<p>We have created a script for you, just follow the instructions bellow and start playing by connecting on your linux box or a virtual linux instance on <a href="https://www.digitalocean.com/?refcode=6e83df0e17c6" target="_blank">digital ocean</a> or Amazon E2 or solo. If you are an advanced linux user just use the script that is generated for you <a href="<?php echo $urlconstruct; ?>">here<br>
  </a>If you have a Ubuntu Machine ready, you do not have to read all this page, just run the following three commands and you will be running in 5 minutes. </p>
<p><span style="color: #FB0509">wget -O script.sh <?php echo $urlconstruct; ?><br>
    chmod 755 script.sh<br>
    ./script.sh </span> </p>
<h1> METHOD 1 - Virtual Server on Digital Ocean</h1>
  <p>This method will cost you nothing for at least 15 days using the coupon provided. You will create a free account with digital ocean, start a virtual machine with Ubuntu, Access the Virtual Machine remotely, run 3 commands and then after about 10 minutes you will be playing. Skip to the next method if you do not want to use digital ocean or have your own Ubuntu Machine. If you are not familiar with this, <a href="https://www.digitalocean.com/?refcode=6e83df0e17c6">Digital Ocean</a> is an online service like Amazon E2 (just cheaper), that deploys linux machines on demand for you while you pay by the hour. It will be cheap and reliable with you having total control over it, comparing to other minecraft specific hosted services. If you do decide to pay for it it will be about 20 a month.</p>
<p>Prerequisites : An account with digital ocean</p>
  <ol>
    <li>Go to the <a href="https://www.digitalocean.com/?refcode=6e83df0e17c6" target="_blank">Digital Ocean</a> Website and <a href="https://www.digitalocean.com/?refcode=6e83df0e17c6" target="_blank">sign up</a> for a new account<br><img src="images/guide1.PNG" width="600" alt=""/></li>
    <li><a href="https://www.digitalocean.com/?refcode=6e83df0e17c6" target="_blank">Sign Up</a> for a new account<br>
    <img src="images/guide2.PNG" width="565" height="478" alt=""/></li>
    <li>Click &quot;get started&quot; to continue and update your billing<br>
    <img src="images/guide3.PNG" width="449" height="401" alt=""/></li>
    <li>Apply the coupon &quot;<strong>10TOSHIP</strong>&quot;  to get $10 in your account for free.</li>
    <li>You can continue for free but keep in mind that you will need 20$ per month for a proper minecraft server. You can just try for a few days though until your free balance is done, and then just stop using it, or even start a new account and never pay. Just make sure you do not provide a credit card number if you plan to do this.. If you go over your balance because you messed up they will just suspend your account in the end of the month.<br>
    </li>
    <li>Once payment or coupon application is complete you are ready to create your droplets. Click on create droplet.<br>
    <img src="images/guide6.PNG" width="600" alt=""/></li>
    <li>Select a hostname (for example izante), and then select one of the virtual servers that suits your needs.<span style="color: #FF0004"> <em><strong>Select at least the 2GB/2CPU</strong></em></span> for a server for more than 3 people.</li>
    <li>If you know what you are doing and own a domain name or have dyndns you can put a real domain here , for example minecraft.yourdomain.com and then create an A record and point to the IP you will get in the next step.<br>
      <img src="images/guide7.PNG" width="711" height="382" alt=""/></li>
    <li>Select Ubuntu 13.10. x64 or any other 64bit Ubuntu<br>
    <img src="images/guide8.PNG" width="406" height="359" alt=""/></li>
    <li>Create your droplet. You will receive an email in a minute with the ip to connect and username/password. You will receive something like this in less than a minute<br>
      <img src="images/guide10.PNG" width="313" height="134" alt=""/><br>
    </li>
    <li>Download PUTTY from <a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe" target="_blank">here</a> (<a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe</a>)</li>
    <li>Enter the ip address you got from the previous steps and hit Open<br>
    <img src="images/guide11.PNG" width="453" height="431" alt=""/></li>
    <li>Enter your supplied credentials<br>
    <img src="images/guide12.PNG" width="319" height="80" alt=""/></li>
    <li>Run the following commands one by one<br>
      <span style="color: #FB0509">wget -O script.sh <?php echo $urlconstruct; ?><br>
    chmod 755 script.sh<br>
    ./script.sh    </span></li>
    <li>The script will need some time to update the system and compile the server. Be patient, this might take 5 minutes. If there are any errors, leave a comment at the end of this page.When the process finishes the server will reboot and you can start connecting<br>
    </li>
    <li></li>
    <li>Enjoy!<br>
    </li>
  </ol>
  <p>&nbsp;</p>
  <h1>METHOD 2 - Physical or Virtual Machine that you control</h1>
  <p>This method will not cost you anything but you need to have a spare PC You can start playing a few minutes after you install UBUNTU. </p>
<p>Prerequisites : A physical or virtual machine that you control with Ubuntu Server 64Bit</p>
  <ol>
    <li>Install Ubuntu Server 13 64bit from the official Ubuntu locations via a usb or CD. Make sure on the final step to select to install the openSSH client.</li>
    <li>Download PUTTY from <a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe" target="_blank">here</a> (<a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe</a>)</li>
    <li>Enter the ip address of your machine<br>
      <img src="images/guide11.PNG" width="453" height="431" alt=""/></li>
    <li>Enter the credentials you selected duting setup<br>
      <img src="images/guide12.PNG" width="319" height="80" alt=""/></li>
    <li>Run the following commands one by one<br>
      <span style="color: #F9060A">wget <span style="color: #FB0509"> -O script.sh</span> <?php echo $urlconstruct; ?><br>
      chmod 755 script.sh<br>
      ./script.sh </span></li>
    <li>The script will need some time to update the system and compile the server. Be patient, this might take 5 minutes. If there are any errors, leave a comment at the end of this page. When the process finishes the server will reboot and you can start connecting</li>
    <li>Enjoy!</li>
  </ol>
  <p>&nbsp;</p>
  <h1>METHOD 3 - A fresh Ubuntu installation - Generic Method</h1>
  <p>This method will not cost you anything. It is for more advanced users</p>
<p>Prerequisites : A machine with Ubuntu 64Bit</p>
<p>Just use my script to install the client or download it here and modify it<br>
    <br>
    <span style="color: #F70105">wget <span style="color: #FB0509"> -O script.sh</span> <?php echo $urlconstruct; ?><br>
chmod 755 script.sh<br>
./script.sh  </span><!-- Footer Wrapper --></p>
<?php include("footer.php"); ?>

</body>
</html>








