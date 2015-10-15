<?php 
	use themes\helios\HeliosTheme;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Left Sidebar | <?= App::$entity->name;?></title>
		<link rel="shortcut icon" href="<?= App::getAlias('images')?>/favicon.png" type="image/png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<?= HeliosTheme::register(); ?>
	</head>
	<body class="left-sidebar">

		<!-- Header -->
			<div id="header">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h2><a href="index.php?c=site" id="logo"><?= $content;?></a></h2>
						</header>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php?c=site">Home</a></li>
<!-- 							<li> -->
<!-- 								<a href="">Dropdown</a> -->
<!-- 								<ul> -->
<!-- 									<li><a href="#">Lorem ipsum dolor</a></li> -->
<!-- 									<li><a href="#">Magna phasellus</a></li> -->
<!-- 									<li><a href="#">Etiam dolore nisl</a></li> -->
<!-- 									<li> -->
<!-- 										<a href="">And a submenu &hellip;</a> -->
<!-- 										<ul> -->
<!-- 											<li><a href="#">Lorem ipsum dolor</a></li> -->
<!-- 											<li><a href="#">Phasellus consequat</a></li> -->
<!-- 											<li><a href="#">Magna phasellus</a></li> -->
<!-- 											<li><a href="#">Etiam dolore nisl</a></li> -->
<!-- 										</ul> -->
<!-- 									</li> -->
<!-- 									<li><a href="#">Veroeros feugiat</a></li> -->
<!-- 								</ul> -->
<!-- 							</li> -->
							<li><a href="index.php">Left Sidebar</a></li>
							<li><a href="index.php">Right Sidebar</a></li>
							<li><a href="index.php?c=default&a=login">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Main -->
			<div class="wrapper style1">

				<div class="container">
					<div class="row 200%">
						<div class="4u" id="sidebar">
							<hr class="first" />
							<section>
								<header>
									<h3><a href="#">Accumsan sed penatibus</a></h3>
								</header>
								<p>
									Dolor sed fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
									porttitor phasellus tempus cubilia ultrices tempor sagittis  tellus ante diam nec penatibus dolor cras
									magna tempus feugiat veroeros.
								</p>
								<footer>
									<a href="#" class="button">Learn More</a>
								</footer>
							</section>
							<hr />
							<section>
								<header>
									<h3><a href="#">Sed lorem etiam consequat</a></h3>
								</header>
								<p>
									Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
								</p>
								<div class="row 50% no-collapse">
									<div class="4u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic10.jpg" alt="" /></a>
									</div>
									<div class="8u">
										<h4>Nibh sed cubilia</h4>
										<p>
											Amet nullam fringilla nibh nulla convallis tique ante proin.
										</p>
									</div>
								</div>
								<div class="row 50% no-collapse">
									<div class="4u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic11.jpg" alt="" /></a>
									</div>
									<div class="8u">
										<h4>Proin sed adipiscing</h4>
										<p>
											Amet nullam fringilla nibh nulla convallis tique ante proin.
										</p>
									</div>
								</div>
								<div class="row 50% no-collapse">
									<div class="4u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic12.jpg" alt="" /></a>
									</div>
									<div class="8u">
										<h4>Lorem feugiat magna</h4>
										<p>
											Amet nullam fringilla nibh nulla convallis tique ante proin.
										</p>
									</div>
								</div>
								<div class="row 50% no-collapse">
									<div class="4u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic13.jpg" alt="" /></a>
									</div>
									<div class="8u">
										<h4>Sed tempus fringilla</h4>
										<p>
											Amet nullam fringilla nibh nulla convallis tique ante proin.
										</p>
									</div>
								</div>
								<div class="row 50% no-collapse">
									<div class="4u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic14.jpg" alt="" /></a>
									</div>
									<div class="8u">
										<h4>Malesuada fermentum</h4>
										<p>
											Amet nullam fringilla nibh nulla convallis tique ante proin.
										</p>
									</div>
								</div>
								<footer>
									<a href="#" class="button">Magna Adipiscing</a>
								</footer>
							</section>
						</div>
						<div class="8u important(collapse)" id="content">
							<article id="main">
								<header>
									<h2><a href="#">Left Sidebar</a></h2>
									<p>
										Morbi convallis lectus malesuada sed fermentum dolore amet
									</p>
								</header>
								<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic06.jpg" alt="" /></a>
								<p>
									Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa 
									posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus 
									lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum 
									consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue 
									interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia 
									natoque aenean scelerisque vel lacinia mollis quam sodales congue.
								</p>
								<section>
									<header>
										<h3>Ultrices tempor sagittis nisl</h3>
									</header>
									<p>
										Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
										at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis 
										feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit 
										fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus 
										egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna. 
									</p>
									<p>
										Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient 
										orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur 
										ut penatibus fermentum nibh erat malesuada varius. 
									</p>
								</section>
								<section>
									<header>
										<h3>Augue euismod feugiat tempus</h3>
									</header>
									<p>
										Pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis 
										feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit 
										ut nunc urna volutpat donec cubilia commodo risus morbi. Lobortis vestibulum velit malesuada ante 
										egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna. 
									</p>
								</section>
							</article>
						</div>
					</div>
					<hr />
					<div class="row">
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic07.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Gravida aliquam penatibus</a></h3>
							</header>
							<p>
								Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
								porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
							</p>
						</article>
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic08.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Sed quis rhoncus placerat</a></h3>
							</header>
							<p>
								Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
								porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
							</p>
						</article>
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic09.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Magna laoreet et aliquam</a></h3>
							</header>
							<p>
								Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
								porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
							</p>
						</article>
					</div>
				</div>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						
						<!-- Tweets -->
							<section class="4u">
								<header>
									<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
								</header>
								<ul class="divided">
									<li>
										<article class="tweet">
											Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
											<span class="timestamp">5 minutes ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Hendrerit rutrum quisque.
											<span class="timestamp">30 minutes ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
											<span class="timestamp">3 hours ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
											<span class="timestamp">5 hours ago</span>
										</article>
									</li>
								</ul>
							</section>

						<!-- Posts -->
							<section class="4u">
								<header>
									<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
								</header>
								<ul class="divided">
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Nisl fermentum integer</a></h3>
											</header>
											<span class="timestamp">3 hours ago</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Phasellus portitor lorem</a></h3>
											</header>
											<span class="timestamp">6 hours ago</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Magna tempus consequat</a></h3>
											</header>
											<span class="timestamp">Yesterday</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Feugiat lorem ipsum</a></h3>
											</header>
											<span class="timestamp">2 days ago</span>
										</article>
									</li>
								</ul>
							</section>

						<!-- Photos -->
							<section class="4u">
								<header>
									<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
								</header>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic10.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic11.jpg" alt="" /></a>
									</div>
								</div>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic12.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic13.jpg" alt="" /></a>
									</div>
								</div>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic14.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="<?= App::getAlias('images');?>pic15.jpg" alt="" /></a>
									</div>
								</div>
							</section>

					</div>
					<hr />
					<div class="row">
						<div class="12u">
							
							<!-- Contact -->
								<section class="contact">
									<header>
										<h3>Nisl turpis nascetur interdum?</h3>
									</header>
									<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
									</ul>
								</section>
							
							<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>

	</body>
</html>