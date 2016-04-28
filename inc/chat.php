<!DOCTYPE html>
<html>
<head>
	<title>Chat - Logado como <?=$nick?></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div id="mensagens"></div>
		<form onsubmit="enviar();return false" method="post" action="">
			<input type="text" id="mensagem" placeholder="Digite sua mensagem" class="form-control">
			<input type="submit" style="display:none">
		</form>
	</div>
</body>
</html>