<?php
include '../config.php';
include '../functions.php';

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../templates');

$filter_number_questions = new Twig_Filter('number_questions', 'showNumberQuestions');
$filter_number_hide_questions = new Twig_Filter('number_hide_questions', 'showNumberHideQuestions');
$filter_number_show_questions = new Twig_Filter('number_show_questions', 'showNumberShowQuestions');


$twig = new Twig_Environment($loader, array(
   'cache' => '../tmp/cache',
	'auto_reload'=> true ,
	'debug' => true,
));

$twig->addFilter($filter_number_questions);
$twig->addFilter($filter_number_hide_questions);
$twig->addFilter($filter_number_show_questions);

$twig->addExtension(new Twig_Extension_Debug());

$template = $twig -> loadTemplate('admin.html');

/* Работа с администраторами */
if(isset($_GET['action'])){
	if($_GET['action'] == 'edit'){
		$_POST['name'] = showUserLogin($_GET['admin_id']);
		$_POST['email'] =showUserEmail($_GET['admin_id']);
	}
	else if($_GET['action'] == 'delete' and !empty($_GET['admin_id'])){
		disrateUser($_GET['admin_id']);
	}
	else if($_GET['action'] == 'delete' and !empty($_GET['category_id'])){
		deleteCategory($_GET['category_id']);
		clearQuestions($_GET['category_id']);
	}
}

if(isset($_POST['password'])){
	$check = checkUser($_POST['email']);
	if(empty($check)){
		insertAdmin($_POST['name'], $_POST['email'], $_POST['password']);
		$_POST = array_filter($_POST, '');
	}
	else{
		setUserPassword($_POST['email'], $_POST['password']);
		$_POST = array_filter($_POST, '');
	}

}

/* Работа с вопросами */
if(empty($_GET['id'])){
	$questions = lastTenQuestions();
}
else{
	$questions = showQuestions(strval($_GET['id']));
}

if(empty($_GET['question_id'])){
	$last_id = showLastQuestion();
	$all_categories = showCategoties();
	$one_question = showOneQuestion($last_id);
	$all_answers = showAnswers($last_id);
}
else{
	$all_categories = showCategoties();
	$one_question = showOneQuestion($_GET['question_id']);
	$all_answers = showAnswers($_GET['question_id']);
}

if(isset($_POST['set_category_name'])){
	insertCategory($_POST['set_category_name']);
	$_GET = array_filter($_GET, '');
	$_POST = array_filter($_POST, '');
	header('Location: admin.php#categories');
}


if(isset($_POST['message'])){
	if(isset($_GET['question_id'])){
		updateContent($_GET['question_id'], $_POST['message'], $_POST['set_answer']);
	}
	else{
		$category_id = showCategotyIdForQuesttion($_POST['message']);
		$question_id = showLastQuestion();
		insertAdminQuestion($category_id, $_POST['message'], $_POST['set_answer'], $question_id);
	}
	$_GET = array_filter($_GET, '');
	$_POST = array_filter($_POST, '');
	header('Location: admin.php#questions');
}

$post_name = empty($_POST["name"]) ? "Name" : strval($_POST["name"]);
$post_email = empty($_POST["email"]) ? "E-mail" : strval($_POST["email"]);

$all_categories = showCategoties();
$all_admins = showAllAdmins();

$template ->display(array('all_categories' => $all_categories, 'all_questions' => $questions, 'one_question' => $one_question, 'all_answers' => $all_answers, 'all_admins' => $all_admins, 'post_name' => $post_name, 'post_email' => $post_email));
?>