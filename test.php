<?php 
	require "index.html";
	$message = 'Это тестовое сообщение в мире!';
	$to = "davittchemi555@gmail.com";
	$subject = 'Тестовая тема';
	mail ($to, $subject, $message);
 ?>