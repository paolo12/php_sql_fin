<?php
/*---  Действия с данными пользователя ---*/

/*Функция отображает всех пользователей*/
function showAllAdmins(){
	$sql_all_admins = 'SELECT * FROM `users` WHERE admin = 1';
	$stmt = $GLOBALS['pdo']->prepare($sql_all_admins);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*Функция отображает id пользователя*/
function showUserId($login){
	$login = filter_var($login, FILTER_SANITIZE_STRING);
	$sql_user_id = 'SELECT `id` FROM `users` WHERE login = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_user_id);
	$stmt->execute(array($login));
	return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
}

/*Функция отображает логин пользователя*/
function showUserLogin($id){
	$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
	$sql_user_login = 'SELECT `login` FROM `users` WHERE id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_user_login);
	$stmt->execute(array($id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция отображает e-mail пользователя*/
function showUserEmail($id){
	$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
	$sql_user_login = 'SELECT `email` FROM `users` WHERE id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_user_login);
	$stmt->execute(array($id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция проверяет есть ли пользователь в базе*/
function checkUser($email){
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$sql_check_user = 'SELECT id, login, email FROM `users` WHERE `email` LIKE ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_check_user);
	$stmt->execute(array($email));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/*Функция добавляет пользователя в базу*/
function insertUser($login, $email){
	$login = filter_var($login, FILTER_SANITIZE_STRING);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$sql_insert_user = 'INSERT INTO `users` (login, email, password, admin) VALUES (?, ?, \'\', 0)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_user);
	$stmt->bindParam(1, $login);
	$stmt->bindParam(2, $email);
	$stmt->execute();
}

/*Функция добавляет администратора в базу*/
function insertAdmin($login, $email, $pswrd){
	$login = filter_var($login, FILTER_SANITIZE_STRING);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$pswrd = md5(filter_var($pswrd, FILTER_SANITIZE_STRING));
	$sql_insert_user = 'INSERT INTO `users` (login, email, password, admin) VALUES (?, ?, ?, 1)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_user);
	$stmt->bindParam(1, $login);
	$stmt->bindParam(2, $email);
	$stmt->bindParam(3, $pswrd);
	$stmt->execute();
}

/*Функция добавляет пароль администратору*/
function setUserPassword($email, $pswrd){
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$pswrd = md5(filter_var($pswrd, FILTER_SANITIZE_STRING));
	$sql_user_login = 'UPDATE `users` SET `password` = ?, `admin` = 1 WHERE `email` = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_user_login);
	$stmt->bindParam(1, $pswrd);	
	$stmt->bindParam(2, $email);
	$stmt->execute();
}

/*Функция удаляет пользователя из администраторов*/
function disrateUser($id){
	$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
	$sql_user_login = 'UPDATE `users` SET `password` = \'\', `admin` = 0 WHERE id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_user_login);
	$stmt->execute(array($id));
}

/*---  Действия с данными тем ---*/

/*Функция отображает все темы*/
function showCategoties(){
	$sql_categories = 'SELECT * FROM `categories`';
	$stmt = $GLOBALS['pdo']->prepare($sql_categories);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*Функция отображает id темы по её имени*/
function showCategotyId($name){
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	$sql_category = 'SELECT `id` FROM `categories` WHERE name = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_category);
	$stmt->execute(array($name));
	return $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
}

/*Функция отображает id темы для выбранного вопроса*/
function showCategotyIdForQuesttion($question_content){
	$question_content = filter_var($question_content, FILTER_SANITIZE_STRING);	
	$sql_question = 'SELECT `category_id` FROM `questions` WHERE content = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_question);
	$stmt->execute(array($question_content));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция добавляет тему в базу*/
function insertCategory($name){
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	$sql_insert_category = 'INSERT INTO `categories` (`name`) VALUES (?);';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_category);
	$stmt->execute(array($name));
}

/*Функция отображает общее количество вопросов в теме*/
function showNumberQuestions($category_id){
	$category_id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_number_questions = 'SELECT COUNT(*) FROM `questions` WHERE `category_id` = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_number_questions);
	$stmt->execute(array($category_id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция отображает общее количество опубликованных вопросов в теме*/
function showNumberShowQuestions($category_id){
	$category_id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_number_questions = 'SELECT COUNT(*) FROM `questions` WHERE `category_id` = ? AND `show` = 1';
	$stmt = $GLOBALS['pdo']->prepare($sql_number_questions);
	$stmt->execute(array($category_id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция отображает общее количество не опубликованных вопросов в теме*/
function showNumberHideQuestions($category_id){
	$category_id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_number_questions = 'SELECT COUNT(*) FROM `questions` WHERE `category_id` = ? AND `show` = 0';
	$stmt = $GLOBALS['pdo']->prepare($sql_number_questions);
	$stmt->execute(array($category_id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция удаляет тему и все вопросы из неё*/
function deleteCategory($category_id){
	$id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_category_id = 'DELETE FROM `categories` WHERE id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_category_id);
	$stmt->execute(array($id));
}

/*Функция удаляет все вопросы удаленной темы*/
function clearQuestions($category_id){
	$id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_category_id = 'DELETE FROM `questions` WHERE `category_id` = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_category_id);
	$stmt->execute(array($id));
}

/*---  Действия с вопросами и ответами ---*/

/*Функция отображает последние десять вопросов*/
function lastTenQuestions(){
	$sql_questions = 'SELECT * FROM `questions` WHERE `show` = 1 ORDER BY id DESC LIMIT 10';
	$stmt = $GLOBALS['pdo']->prepare($sql_questions);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*Функция отображает все вопросы из указанной теме*/
function showQuestions($category_id){
	$category_id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_questions = 'SELECT * FROM `questions` WHERE `category_id` = ? AND `show` = 1';
	$stmt = $GLOBALS['pdo']->prepare($sql_questions);
	$stmt->execute(array($category_id));
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*Функция отображает один вопрос */
function showOneQuestion($question_id){
	$question_id = filter_var($question_id[0], FILTER_SANITIZE_NUMBER_INT);
	$sql_questions = 'SELECT * FROM `questions` WHERE id = ? AND `show` = 1';
	$stmt = $GLOBALS['pdo']->prepare($sql_questions);
	$stmt->execute(array($question_id));
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/*Функция отображает id последнего вопроса*/
function showLastQuestion(){
	$sql_answer = 'SELECT MAX(id) id FROM `questions` LIMIT 1';
	$stmt = $GLOBALS['pdo']->prepare($sql_answer);
	$stmt->execute(array());
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция добавляет вопрос пользователя в базу*/
function insertQuestion($category_id, $question_content, $user_id){
	$category_id = showCategotyId($category_id);
	$question_content = filter_var($question_content, FILTER_SANITIZE_STRING);
	$user_id = showUserId($user_id);
	date_default_timezone_set('Europe/Moscow');
	$time = date("Y-m-d H:m:s");
	$date_added = $time;
	
	$sql_insert_question = 'INSERT INTO `questions` (category_id, content, user_id, date_added) VALUES (?, ?, ?, ?)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_question);

	$stmt->bindParam(1, $category_id[0]);
	$stmt->bindParam(2, $question_content);
	$stmt->bindParam(3, $user_id[0]);
	$stmt->bindParam(4, $date_added);	
	$stmt->execute();

	print_r($stmt->errorInfo());
}

/*Функция добавляет вопрос и ответ администратора в базу*/
function insertAdminQuestion($category_id, $question, $answer, $question_id){
	$category_id = filter_var($category_id, FILTER_SANITIZE_NUMBER_INT);
	$question_content = filter_var($question, FILTER_SANITIZE_STRING);	
	$question_id = filter_var($question_id, FILTER_SANITIZE_NUMBER_INT);
	$answer_content = filter_var($answer, FILTER_SANITIZE_STRING);
	$user_id = 1;
	date_default_timezone_set('Europe/Moscow');
	$time = date("Y-m-d H:m:s");
	$date_added = $time;
	
	$sql_insert_question = 'INSERT INTO `questions` (category_id, content, user_id, date_added, show) VALUES (?, ?, ?, ?, 1)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_question);
	$stmt->bindParam(1, $category_id);
	$stmt->bindParam(2, $question_content);
	$stmt->bindParam(3, $user_id);
	$stmt->bindParam(4, $date_added);
	$stmt->execute();
	
	$sql_insert_answer = 'INSERT INTO `answers` (content, question_id, user_id, date_added) VALUES (?, ?, ?, ?)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_answer);
	$stmt->bindParam(1, $answer_content);
	$stmt->bindParam(2, $question_id);
	$stmt->bindParam(3, $user_id);
	$stmt->bindParam(4, $date_added);	
	$stmt->execute();	
}
/*Функция отображает все ответы из указанный вопрос*/
function showAnswers($question_id){
	$question_id = filter_var($question_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_questions = 'SELECT * FROM `answers` WHERE question_id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_questions);
	$stmt->execute(array($question_id));
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*Функция проверяет наличие ответа на указанный вопрос*/
function checkAnswer($question_id){
	$question_id = filter_var($question_id, FILTER_SANITIZE_NUMBER_INT);
	$sql_check = 'SELECT EXISTS(SELECT id FROM `answers` WHERE question_id = ?)';
	$stmt = $GLOBALS['pdo']->prepare($sql_check);
	$stmt->execute(array($question_id));
	return $stmt->fetch(PDO::FETCH_COLUMN, 0);
}

/*Функция добавляет ответ в базу*/
function insertAnswer($question_id, $content){
	$question_id = filter_var($question_id, FILTER_SANITIZE_NUMBER_INT);
	$content = filter_var($content, FILTER_SANITIZE_STRING);
	date_default_timezone_set('Europe/Moscow');
	$time = date("Y-m-d H:m:s");
	$date_added = $time;
	
	$sql_insert_answer = 'INSERT INTO `answers` (content, question_id, user_id, date_added) VALUES (?, ?, 1, ?)';
	$stmt = $GLOBALS['pdo']->prepare($sql_insert_answer);
	$stmt->bindParam(1, $content);
	$stmt->bindParam(2, $question_id);
	$stmt->bindParam(3, $date_added);	
	$stmt->execute();
}

/*Функция обновляет данные вопросы и ответа*/
function updateContent($question_id, $question, $answer){
	$question_id = filter_var($question_id, FILTER_SANITIZE_NUMBER_INT);
	$question = filter_var($question, FILTER_SANITIZE_STRING);
	$answer = filter_var($answer, FILTER_SANITIZE_STRING);
	$check_answer = checkAnswer($question_id);
	
	$sql_question = 'UPDATE `questions` SET content = ?, show = 1 WHERE id = ?';
	$stmt = $GLOBALS['pdo']->prepare($sql_question);
	$stmt->bindParam(1, $question);
	$stmt->bindParam(2, $question_id);
	$stmt->execute();
	
	if ($check_answer == 0){
		insertAnswer($question_id, $answer);
	}
	else{
		$sql_answer = 'UPDATE `answers` SET content = ? WHERE question_id = ?';
		$stmt = $GLOBALS['pdo']->prepare($sql_answer);
		$stmt->bindParam(1, $answer);
		$stmt->bindParam(2, $question_id);
		$stmt->execute();
	}
}
?>