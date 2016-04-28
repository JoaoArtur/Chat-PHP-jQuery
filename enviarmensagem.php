<?php 
	require_once("inc/config.php"); // Retorna o arquivo de configurações do site.
	if (isset($_SESSION['nickname'])) {
		$nick=strip_tags($_SESSION['nickname']);
		$mensagem=htmlspecialchars($_POST['mensagem']);
		$ip=$_SERVER['REMOTE_ADDR'];

		if ($mensagem == "/sair") {
			session_destroy();
			echo $nick." saiu.";
			header("Location: ./");
		} else {
			$sql=mysql_query("INSERT INTO mensagens (nick,mensagem,ip) VALUES ('$nick','$mensagem','$ip')")or die(mysql_error());
		}

	} else {
		require_once("inc/nick.php"); // Retorna o arquivo para definir um nick
	}
?>