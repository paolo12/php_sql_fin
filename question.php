<?php
include __DIR__ .'/config.php';
include __DIR__ .'/functions.php';

require_once __DIR__ .'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ .'/templates');

$twig = new Twig_Environment($loader, array(
   'cache' => __DIR__ .'./tmp/cache',
	'auto_reload'=> true ,
));

$template = $twig -> loadTemplate('question.html');

$all_categories = showCategoties();

$template ->display(['all_categories' => $all_categories]);
?>