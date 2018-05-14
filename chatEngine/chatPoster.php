<?php

	// Koneksi / Sambung ke DB
	$db = new PDO('mysql:host=127.0.0.1;dbname=chat','root','');

	// Amankan data chat
	if(isset($_POST['text']) && isset($_POST['name']))
	{
		$text = strip_tags(stripslashes($_POST['text']));
		$name = strip_tags(stripslashes($_POST['name']));
	}

	if(!empty($text) && !empty($name))
	{
		$insert = $db->prepare("INSERT INTO message VALUES('', '".$name."','".$text."')");
		$insert->execute();

		echo "<"
	}


?>