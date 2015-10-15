<?php 
	use themes\helios\HeliosTheme;
	
	$images = [
			0 => App::getAlias('images')."/header.jpg",
			1 => App::getAlias('images')."/header1.jpg",
			2 => App::getAlias('images')."/header2.jpg",
	];
	$i = rand(0, 2);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?= App::$entity->name; ?></title>
		<link rel="shortcut icon" href="<?= App::getAlias('images')?>/favicon.png" type="image/png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<?= HeliosTheme::register(); ?>
	</head>
	<body class="homepage">
		<!-- Header -->
			<div id="header" style="background-image:url('<?=$images[$i]?>');background-color: #fff;">
				<!-- Inner -->
					<div class="inner">
						<header style="padding: 0px 20%">
							<h2><a href="index.html" id="logo">Путишествуй</a></h2>
							<p>Найди место, которое подойдет именно тебе</p>
							<hr>
						<article>						
							<form>
							<div class="row">
							   <div class="6u">
							    <select>
							     <option>Україна</option><option>Билорусія</option><option>Росія</option><option>Польща</option>
							    </select>
							   </div>
							   <div class="6u">
							    <select>
							      <option>Полтавська</option><option>Київська</option><option>Запоріжська</option><option>Миколаївська</option>
							    </select>
							   </div>
						   </div>
						   <div class="row 100%">
							   <div class="12u">
							     <select>
							      <option>Спорт</option><option>Туризм</option><option>Історичні місця</option><option>Ресторани</option>
							     </select>
							   </div>
							</div>
							<div class="row">
							   <div class="6u">
							     <select>
							      <option>< 1000</option><option>від 1000 до 2000</option><option>від 2000 до 3000</option><option>від 3000 до 4000</option>
							     </select>
							   </div>
							   <div class="6u">
							     <select>
							      <option>< 1000</option><option>від 1000 до 2000</option><option>від 2000 до 3000</option><option>від 3000 до 4000</option>
							     </select>
							   </div>
							</div>
							</form>
						</article>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly">Далее</a>
						</footer>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php?c=default">Главная</a></li>
							<!-- <li>
								<a href="">Dropdown</a>
								<ul>
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Magna phasellus</a></li>
									<li><a href="#">Etiam dolore nisl</a></li>
									<li>
										<a href="">And a submenu &hellip;</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Phasellus consequat</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
										</ul>
									</li>
									<li><a href="#">Veroeros feugiat</a></li>
								</ul>
							</li> -->
							<li><a href="index.php?c=default&a=login">Сервисы</a></li>
							<li><a href="index.php?c=site&a=index">Люди</a></li>
							<li><a href="index.php?c=site&a=test">Статьи</a></li>
							<li><a href="index.php?c=default">Новости</a></li>
							<li><a href="index.php?c=default">Рестораны</a></li>
							<li><a href="index.php?c=default">Билеты</a></li>
							<li><a href="index.php?c=default">Отели</a></li>
							<li><a href="index.php?c=default">О нас</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Hi. You're looking at <strong>Helios</strong>.</h2>
					<p>
						A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
						Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
					</p>
				</header>
			</section>

		<!-- Carousel -->
			<section class="carousel">
				<div class="reel">

					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic01.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Pulvinar sagittis congue</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="../../<?= App::getAlias('images');?>pic02.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Fermentum sagittis proin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="../../../<?= App::getAlias('images');?>pic03.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Sed quis rhoncus placerat</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic04.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Ultrices urna sit lobortis</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic05.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Varius magnis sollicitudin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>

					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic01.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Pulvinar sagittis congue</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic02.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Fermentum sagittis proin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic03.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Sed quis rhoncus placerat</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic04.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Ultrices urna sit lobortis</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="<?= App::getAlias('images');?>pic05.jpg" alt="" /></a>
						<header>
							<h3><a href="#">Varius magnis sollicitudin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>

				</div>
			</section>
			
		<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special">
					<a href="#" class="image featured"><img src="themes/helios/images/pic06.jpg" alt="" /></a>
					<header>
						<h2><a href="#">Sed massa imperdiet magnis</a></h2>
						<p>
							Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim 
							pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
						</p>
					</header>
					<p>
						Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa 
						posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus 
						sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam 
						mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan 
						lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum 
						consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue 
						interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia 
						natoque aenean scelerisque.
					</p>
					<footer>
						<a href="#" class="button">Continue Reading</a>
					</footer>
				</article>

			</div>

		<!-- Features -->
			<div class="wrapper style1">
				
				<section id="features" class="container special">
					<header>
						<h2>Morbi ullamcorper et varius leo lacus</h2>
						<p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
					</header>
					<div class="row">
						<article class="4u special">
							<a href="#" class="image featured"><img src="<?= App::getAlias('images')?>pic07.jpg" alt="" /></a>
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
				</section>

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
