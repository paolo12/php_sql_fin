<?php
session_start();
$host = 'localhost';
$databaseName = 'faqbase';
$user = 'root';
$pass = '';

/* Функция подключения к базе данных */
function connectToDatabase($dbHost, $dbName, $dbUsername, $dbPassword)
{
    try
    {
        return new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
    }
    catch(PDOException $PDOexception)
    {
        exit("<p>An error ocurred: Can't connect to database. </p><p>More preciesly: ". $PDOexception->getMessage(). "</p>");
    }
}

$pdo = connectToDatabase($GLOBALS['host'],  $GLOBALS['databaseName'], $GLOBALS['user'], $GLOBALS['pass']);

?>