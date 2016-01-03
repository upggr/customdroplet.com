
<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
								
									<!-- Logo -->
										<div id="logo">
											<h1><a href="index.php" id="logo">customdroplet.com</a></h1>
											<span><?php 
													
													
													 $i = 0; 
    $dir = 'd/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "$i scripts are available ";
	?></span>
										</div>
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li><a href="index.php">Welcome</a></li>
												<li><a href="start.php">Script Wizzard</a></li>
												<li><a href="#">Help</a></li>
												<li ><a href="#">About</a></li>
												
										  </ul>
										</nav>
								
								</header>

						</div>
					</div>
				</div>
			</div>