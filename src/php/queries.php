<?php

const SQL_CREATE_MENU_TABLE='CREATE TABLE IF NOT EXISTS users(
		uid INT UNSIGNED AUTO INCREMENT NOT NULL,
		login VARCHAR(31) NOT NULL,
		email VARCHAR(31) NOT NULL,
		password(255) NOT NULL,
		activation(255),
		PRIMARY KEY(uid),UNIQUE(login),UNIQUE(email)
		
	)';

?>