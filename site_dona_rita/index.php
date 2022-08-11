<?php
	include("dados.php");
	//var_dump($tutoriais);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Dona Rita</title>
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
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha Saborear o Tempero da Dona Rita</h1>
                    </header>
                    <p> A Melhor Marmita da Cidade</p>
                    <p><a href="QuemEuSou.php?id=" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1><a name="tutorial">Confira Nosso Cardápio</h1></a>
				<p>Cadápio da Semana</p>
			</header>
			<?php
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 300);?>...</p>
			</article>
			<?php
				}
			}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
				
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e o melhor e-mail no campo ao lado e clique em ok!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name ="nome" placeholder="Seu nome">
                    <input type="email" name = "email" placeholder="Seu e-mail">
                    <button>OK!</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>
<!--rodapé-->
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
				<a href="https://twitter.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="social">
			<a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
			</div>
			<div class="social">
			<a href="https://www.instagram.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</body>
</html>