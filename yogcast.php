<!DOCTYPE HTML>
<html>
	<head>
    
		<title>Your Personalized Minecraft Server</title>
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

										<h2>Your personalized Minecraft Server Wizzard for yogcast</h2>
<p>Select your options and click next for simple instructions on how to create a Linux server in a few minutes.</p>

  <form action="yogcast1.php" method="POST" enctype="multipart/form-data" >
<p>Enter your username to be added as an OP : 
  <input name="username" type="text" id="username" size="64" maxlength="256" autocomplete="off">
</p>
    <p>
  <label>Select one of the available Mod Packs : </label>
  <select name="scriptname" id="scriptname">
    <option value="yog1">Yogscast Complete Pack (1.6.4 - forgemod 965)</option>
  </select>
    </p>
    
    <p>
         
      <input name="submit" type="submit" id="submit" formaction="yogcast1.php"
     formmethod="POST" value="Click Here to Generate the installer">
<!-- Footer Wrapper --></p>
<?php include("footer.php"); ?>

</body>
</html>