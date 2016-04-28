$(document).ready(function() {
	var variavel = document.getElementById("mensagens").scrollHeight;
	$("#mensagens").animate({scrollTop: variavel},3000);
	carregarmensagens();
	setInterval(function(){
		carregarmensagens();
	},1000);
});
function carregarmensagens() {
	var url;
	url = "vermensagens.php";
	jQuery.get(url,function(data) {
		$("#mensagens").empty().append(data);
	});
}
function enviar() {
	var url;
	var mensagem;
	var nick;
	var enviando;
	url = "enviarmensagem.php";
	mensagem = $("#mensagem").val();
	enviando = $.post(url, {mensagem:mensagem});
	enviando.done(function() {
		document.getElementById("mensagem").value = "";
		carregarmensagens();
	});
}