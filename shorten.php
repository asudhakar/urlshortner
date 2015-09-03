<?php 

	session_start();
	require_once 'classes/Shorterner.php';

	$s = new Shortener;

	if (isset($_POST['url'])) {
		$url = $_POST['url'];

		if ($code = $s->makeCode($url)) {
			$_SESSION['feedback'] = "Generated! Your Short URL is: <a href=\"http://localhost/urlshortner/{$code}\">http://localhost/urlshortner/{$code}</a>";
		}
		else{
			$_SESSION['feedback'] = "There was a Problem. Invalid URL.";
		}
	}

	header('Location: index.php')

 ?>