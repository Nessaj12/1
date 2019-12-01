<?php //php 7.0.8
function includebd()
{
	$dsn = 'mysql:dbname=base;host=127.0.0.1';
	$user = 'user';
	$password = 'pass';
	$pdo = new PDO($dsn, $user, $password);
}
function searchbd()
{
	$bd=0;
	$bd=$pdo->query("SELECT * FROM base");
}
?>