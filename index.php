<?php 
	require_once("inc/config.php"); // Retorna o arquivo de configurações do site.
	if (isset($_SESSION['nickname'])) {
		$nick = $_SESSION['nickname'];
		require_once("inc/chat.php"); // Retorna o arquivo do chat
	} else {
		require_once("inc/nick.php"); // Retorna o arquivo para definir um nick
	}
?>