<?php
require_once('autoloader.php');

use core\classes\Application;

$config = [
	'app' => require_once('settings/main.php'),
	'db' => require_once('settings/db.php'),
];

$application = new Application($config);
$application->run();