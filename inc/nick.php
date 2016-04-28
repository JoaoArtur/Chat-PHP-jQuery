<?php
if($_SERVER['SCRIPT_NAME'] == "/chat/vermensagens.php") {
echo "<script>location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Defina seu nickname</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="margin: 20% 25%">
				<form method="post" action="">
					<h1 align="center">Entre no chat</h1>
					<input class="form-control" type="text" placeholder="Nome de usuário" name="nickname">
					<input class="btn btn-info form-control" type="submit" value="Entrar">
					<?php
						if (isset($_POST['nickname'])) {
							$nick = str_replace(array("!","#","$","%","¨","§","*","&"),"",htmlspecialchars($_POST['nickname']));
							$_SESSION['nickname'] = $nick;
							header("Location: ./");
						}
					?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>