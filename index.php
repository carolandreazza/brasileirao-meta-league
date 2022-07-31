<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
 
<head> 
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="description" content="Welcome to Football's Country!" />
	<meta name="keywords" content="brasil, BRASIL, Brasil, brasileirão, brasileirao, binance, Binance, meta league, projeto binance, projeto brasileirao, jump, jumpverso, jumpnexus, cryptotoken, nft, digital asset, nft, collectors, collection, NFT, art, TheSandbox, Sandbox"/>
	
	<meta name="author" content="Jump Projetos Disruptivos">
	<meta property="og:title" content="Brasileirão Binance League!" />
	<meta property="op_imgog:url" content="https://jumpverso.com.br/braspage" />
	<meta property="og:site_name" content="Football's Country" />
	<meta property="og:image" content="_img/op_img.png" />
	<meta property="og:description" content="Welcome to Football's Country!">


	<title>Brasileirão Binance League</title>

	<link rel="stylesheet" href="_css/hub.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="_css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="_css/login.css">
    <!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="_img/logos/favicon.png" />
	<!-- Deu sefinição de página representativa -->
	<link rel="canonical" href="https://jumpverso.com.br/pelepage"> 

	<script src="_js/jquery.min.js"></script>
	<script src="_js/jquery.easing.min.js"></script>

</head>


<body>
    
	<!-- Wrap -->
	<div id="Wrap" class="globalWrap">
		
	
		<!-- header -->
		<header id="header">

			<!-- head_side -->
			<div class="head_side_lan">
				<a href="/braspage/index_en.php" class="lan_en">EN</a>
			</div>
			<!-- head_side -->

		</header>
		<!-- header -->

		<!-- main contents -->
		<main role="main">
			<!-- main_container -->
			<div id="main_container">

				<!-- login -->
				<section id="sec_login">										
					<div class="sv_text">
						<h2>LOGIN</h2>
					</div>	
					<div class="login_contents">
						<?php
						if(isset($_SESSION['nao_autenticado'])):
						?>
						<div class="er_text notification is-danger">
							<p>ERRO: Usuário ou senha inválidos.</p>
						</div>
						<?php
						endif;
						unset($_SESSION['nao_autenticado']);
						?>                                    
						<div class="box">
							<form action="login.php" method="POST">
								<div class="field">
									<div class="control">
										<input name="usuario" type="text" class="input is-large" placeholder="Usuário" autofocus="">
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input name="senha" class="input is-large" type="password" placeholder="Senha">
									</div>
								</div>
								<button type="submit" class="button">Entrar</button>
							</form>
						</div>
					</div>
					<!-- <p class="stnft_item"><img src="_img/story_nft_back.png" alt=""></p> -->
				</section>
				<!-- login -->

			</div>
			<!-- //main_container -->
		</main>
		<!-- //main contents -->

		<!-- footer -->
		<footer id="footer">
			<div class="inner">
				<div><a href="https://jumpverso.com.br/"><img src="_img/comm/logo_jump.webp" alt="Brasileirão Binance League"></a></div>
				<div>
					<div>
						<p>Brasileirão Binance League</p>
						<p>R. Mario de Boni, 2250 - Sanvitto,<br class="m"/> Caxias do Sul - RS, 95012-560</p>
						<p>E-mail brasilbinanceleague@jumpverso.com.br</p>
					</div>
					<div>COPYRIGHT ⓒ Jump Verso. ALL RIGHTS RESERVED</div>
			</div>
			<!-- TERMOS DE USO -->
				<div class="f_link_btn">
					<!-- <p><a href="agree_en.html" data-toggle="modal" data-target="#agree_en" download>Termos de uso <i class="xi-external-link"></i></a></p>					 -->
				</div>
			</div>
		</footer>
		<!-- footer -->
</body>

</html>