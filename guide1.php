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

										<h2>Select one of our <?php echo $_GET['coin']; ?> guides</h2>
<p>
    <?php localmysqldbconnect(); getcoinlistminetypes($_GET['coin']); ?>
    
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
										
										



		<!-- Footer Wrapper -->
			<?php include("footer.php"); ?>

	</body>
</html>