<?php
	header('Content-Type:text/html; charset=UTF-8');
	mysql_connect('localhost', 'root', 'toor') or die('Could not connect to database man!');
	//mysql_connect('localhost', 'root', '') or die('Could not connect to database man!');
	mysql_select_db('helpdesk') or die('Could not select database!');
	mysql_query("set names utf8");
?>