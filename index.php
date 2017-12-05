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

$template = $twig -> loadTemplate('index.html');

if(empty($_GET['id'])){
	$questions = lastTenQuestions();
}
else{
	$questions = showQuestions(strval($_GET['id']));
}

if(isset($_GET['question_id'])){
	$one_question = showOneQuestion($_GET['question_id']);
	$all_answers = showAnswers($_GET['question_id']);
}
else{
	$question_id = showLastQuestion();
	$one_question = showOneQuestion($question_id);
	$all_answers = showAnswers($question_id);
}

$all_categories = showCategoties();

$template ->display(array('all_categories' => $all_categories, 'all_questions' => $questions, 'one_question' => $one_question, 'all_answers' => $all_answers));
?>