<?php
	//Подключаемся к базе
	$mysqli = new mysqli("127.0.0.1", "root", "23272829", "work");

//	print($mysqli->connect_error);
//	print_r($_GET);
//	echo $_GET[unit];

//	$db_list = mysqli_query($mysqli, 'SHOW TABLES');

//	$row = mysqli_fetch_assoc($db_list);

//	print_r($_GET);

	$query_string = "INSERT INTO parts (unit, point, brokes, fix, note) VALUES (\"$_GET[unit]\", \"$_GET[point]\", \"$_GET[brokes]\", \"$_GET[fix]\", \"$_GET[note]\")";
	echo $query_string;
	$db_list = mysqli_query($mysqli, $query_string);

	if($db_list == FALSE){
		print("Query is false!");
	}
//	$row = mysqli_fetch_assoc($db_list);
//	print_r($row);

	//Закрываем контекст работы с базами
	mysqli_close($mysqli);

/*
server = 127.0.0.1;
db = work;
table = parts;

id INT AUTO INCREMENT,
time TIMESTAMP,
unit TINYTEXT,
point TINYTEXT,
brokes TEXT,
fix TEXT,
note TEXT,
*/


?>
