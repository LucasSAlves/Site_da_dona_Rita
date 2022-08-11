<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Contato</title>
	<link rel="stylesheet" type="text/css" href="conteudo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	<header>
		<nav>
		<ul>
				<li><a href="index.php?id=" title="Home" alt="Home">Home</a></li>
				<li><a href="QuemEuSou.php?id=" title="Quem Sou" alt="Quem Sou">Quem Sou</a></li>
				<li><a href="contato.php?id=" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<style>
		body{font-family: Arial, Helvetica, sans-serif}
		.content{display:flex;justify-content: center}
		.contato{width: 100%;max-width: 500px;}
		.form{display: flex;flex-direction:column}
		.field{padding:10px;margin-bottom: 15px;border:1px solid #DDD;border-radius: 5px; font-family: Arial, Helvetica, sans-serif;font-size:16px}
		textarea{height: 150px;}

	</style>


<body>
	<section class="content">

		<div class="contato">
			<h3>Formulário de contato</h3>
			<form class="form" method="POST" action="email.php">
				<input class="fild" name="name" placeholder="Nome">
				<input class="field" name="email" placeholder="E-mail">
				<textarea class="field" name="message" placeholder="Digite sua mensagem aqui."></textarea>
				<input class="field"type="submit" value="Enviar">
			</form>

		</div>

	</section>
<!--Rodapé-->
<footer>
		<div class="boxs1">
				<h2>Início</h2>
			<ul>
				<ol>	
				<lI><a href="index.php?id=">Home</a></lI>
				<lI><a href="pagina2.php?id=">Marmitex</a></lI>
				<lI><a href="QuemEuSou.php?id">Quem Sou</a></lI>
				</ol>
			</ul>
		</div>
		<div class="boxs1">
		<h2>Informações</h2>
				<ul>
				<ol>
					<li><a href="#">Blog</a></li>
					<li><a href="contato.php?id">Contato</a></li>
				</ol>
				</ul>
		</div>
		<div class="boxs1">
		<h2>Suporte</h2>
				<ul>
					<ol>
					<li><a href="#">Email</a></li>
					<li><a href="#">Telefone</a></li>
					</ol>
				</ul>
		</div>
		<div class="boxs1">
			<h2>Sobre Nós</h2>
			<p>Começei no ano de 2010 com minha familia, com o intuito de servir a melhor comida, com qualidade, fartura e um excelente atendimento. Desde o primeiro ano de abertura só tivemos crescimento e elogios, vários certificados de qualidade e troféus. Em 2013 recebemos o 1º certificado e troféu de destaque empresarial e qualidade no atendimento. A partir de então todos os anos somos homenageados.</p>
		</div>
	</footer>
	<div class="footer">
		<h2>Desenvolvido pro Lucas da Silva Alves</h2>
		<div class="sociais">
			<div class="social">
				<a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="social">
			<a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
			</div>
			<div class="social">
			<a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</body>
	</html>
	
