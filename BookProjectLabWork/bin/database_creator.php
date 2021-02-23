<?php

require_once('connect.php');
//create table
$table = "CREATE TABLE db_great_reads.users (
	email VARCHAR(50) NOT NULL COMMENT 'User Email',
	name_user VARCHAR(100) NOT NULL COMMENT 'User Name',
	pass_word VARCHAR(256) NOT NULL COMMENT 'Password',
	image_path VARCHAR(300) NOT NULL COMMENT 'Path Of Image',
	bio VARCHAR(250) COMMENT 'Bio',
	CONSTRAINT PK_EMAIL PRIMARY KEY(email)
)";


$sql = mysqli_query($connect, $table);

if (!$sql) {
	
	echo 'Flip TABLES';
	
} else {
	
	echo 'Yay data!';
	
}

?>