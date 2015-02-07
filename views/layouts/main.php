<?php 
	use themes\app\AppTheme;
?>

<!DOCTYPE html>
<html lang="ru" style="height: 100%;">
<head>
	<?php AppTheme::register(); ?>
    <title><?= App::$entity->name; ?></title>
</head>
<body style="height: 100%;">
<header style="height: 100px; background: #ccc;"></header>
<div style="width: 100%; height: 60%;">
	<aside style="width: 250px; height: 100%; background: yellow; float: left;"></aside>
	<article style="width: 1028px; height: inherit; position:absolute; left: 250px;background: blue;"><?= $content; ?> </article>
</div>
<footer style="height: 100px; background: green;"></footer>
</body>
</html>
