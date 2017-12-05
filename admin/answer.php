<?php
include '../config.php';
include '../functions.php';

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../templates');

$twig = new Twig_Environment($loader, array(
   'cache' => '../tmp/cache',
	'auto_reload'=> true ,
	'debug' => true,
));

$twig->addExtension(new Twig_Extension_Debug());

$template = $twig -> loadTemplate('answer.html');

if(empty($_GET['question_id'])){
	header('Location: admin.php#questions');
}
else{
	$all_categories = showCategoties();
	$one_question = showOneQuestion($_GET['question_id']);
	$all_answers = showAnswers($_GET['question_id']);
}

$template ->display(array('all_categories' => $all_categories, 'one_question' => $one_question, 'all_answers' => $all_answers));
?>