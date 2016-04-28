<?php 
	require_once("inc/config.php"); // Retorna o arquivo de configurações do site.
	if (isset($_SESSION['nickname'])) {
		$sql=mysql_query("SELECT * FROM mensagens");
		if (mysql_num_rows($sql) > 0) {
			echo '<p>Seja bem vindo '.$_SESSION['nickname'].'</p>';
			echo '<p>Digite /sair para deslogar do chat</p><br/>';
			while($ln = mysql_fetch_assoc($sql)){
				$nick=strip_tags($ln['nick']);
				$mensagem=htmlspecialchars($ln['mensagem']);
				echo "<p>".$nick.": ".$mensagem."</p>";
			}
		} else {
			echo '<p>Seja bem vindo '.$_SESSION['nickname'].'</p><br/>';
			echo '<p>Digite /sair para deslogar do chat</p>';
			echo "Nenhuma mensagem até o momento.";
		}
	} else {
		require_once("inc/nick.php"); // Retorna o arquivo para definir um nick
	}
?>