<!DOCTYPE HTML>
<html>
	<head>
    
		<title><?php echo $_GET['coin']; ?> mining tutorial - Complete the form</title>
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

										<h2>Your personalized Easy Linux CPU Miner Wizzard for <?php echo $_GET['coin']; ?></h2>
<p>Select your options and click next for simple instructions on how to create a Linux CPU miner in a few minutes. You will need to download the windows client (or Linux) for the wallet where all the coins will be accumulated. Then copy one of the receiving addresses and paste it here.</p>
  <form action="guide3.php" method="GET" enctype="multipart/form-data" >
    <p>
      <label>Enter your Payout address : </label>
      <input name="payoutaddress" type="text" id="payoutaddress" size="64" maxlength="256" autocomplete="off">
  (xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx)</p>
    <p>
  <label>Enter the amount of cores you will be using : </label> 
      <select name="cores" id="cores">
       <option value="-1" selected="selected">All Cores (recommended)</option>
        <option value="1">1 Core</option>
        <option value="2">2 Cores</option>
        <option value="3">4 Cores</option>
        <option value="6">6 Cores</option>
        <option value="8">8 Cores</option>
        <option value="12">12 Cores</option>
        <option value="16">16 Cores</option>
        <option value="20">20 Cores</option>
        <option value="24">24 Cores</option>
      </select>
    </p>
    
    <p>
          <input type="hidden" name="coinid" value="<?php echo $_GET['coinid']; ?>">
          <input type="hidden" name="coin" value="<?php echo $_GET['coin']; ?>">
      <input name="submit" type="submit" id="submit" formaction="guide3.php"
     formmethod="GET" value="Click Here to Generate your miner">
      </p></p>
										
										

<p>&nbsp;</p>
								  <p>For questions / suggestions and anything else, leave your comments on my reddit page : <a href="http://www.reddit.com/r/CryptoCurrency/comments/1t8duk/izante_altcoin_mining_made_easy/">http://www.reddit.com/r/CryptoCurrency/comments/1t8duk/izante_altcoin_mining_made_easy/</a></p>

		<!-- Footer Wrapper -->
			<?php include("footer.php"); ?>

	</body>
</html>