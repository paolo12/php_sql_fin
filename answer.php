<?php
include __DIR__ .'/config.php';
include __DIR__ .'/functions.php';

require_once __DIR__ .'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ .'/templates');

$twig = new Twig_Environment($loader, array(
   'cache' => __DIR__ .'./tmp/cache',
	'auto_reload'=> true ,
	'debug' => true,
));

$twig->addExtension(new Twig_Extension_Debug());

$template = $twig -> loadTemplate('answer.html');

if(empty($_GET['question_id'])){
	header('Location: index.php#questions');
}
else{
	$all_categories = showCategoties();
	$one_question = showOneQuestion($_GET['question_id']);
	$all_answers = showAnswers($_GET['question_id']);
}

$template ->display(array('all_categories' => $all_categories, 'one_question' => $one_question, 'all_answers' => $all_answers));
?>