<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="_cdn/css/bootstrap_custom.css">
    <link rel="stylesheet" href="_cdn/css/app.css">
    <title>Bootstrap Builder</title>
</head>
<body>
    
    <header class="main_header">
        <div class="header_bar bg-front">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="d-none d-lg-flex col-lg-4 justify-content-center align-items-center p-2 text-white">
                        <i class="icon-location-arrow"></i>
                        <p class="my-auto ml-3">Av. Pequeno Principe, 0 Brasil/SC</p>
                    </div>
                    <div class="d-none d-md-flex col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                        <i class="icon-clock-o"></i>
                        <p class="my-auto ml-3">Seg/Sex: 09:00h - 19:00 Sab/Dom: Plantão</p>
                    </div>
                    <div class="d-flex col-4 col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                        <i class="icon-envelope"></i>
                        <p class="my-auto ml-3">contato@paulo.com.br<br>+55 (11) 3235-2352</p>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light my-3">
			<div class="container">
				
				<div class="navbar-brand">
					<a href="index.php">
						<h1 class="text-hide">Imobiliária</h1>
						<img src="assets/images/logo.png" alt="" class="d-inline-block" width="280">
					</a>
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Destaque</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Alugar</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
					</ul>
				</div>
			</div>
      	</nav>
    </header>

	<?php

		$getApp = filter_input(INPUT_GET, "app", FILTER_SANITIZE_STRIPPED);

		if (empty($getApp)) {
			require "widget/home.php";
		} elseif (!empty($getApp) && file_exists("widget/" . $getApp . ".php")) {
			require "widget/" . $getApp . ".php";
		} else {
			echo "Whops, DEU ERRO TOTAL";
		}

	?>

	<article class="main_option bg-dark text-white py-5">
		<div class="container">
			<div class="row mx-auto" style="width: 500px">
				<h1>Quer ficar por dentro das novidades?</h1>
				<p>Deuxe seu nome e o melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os melhores negócios de todos os lançamentos do sul da ilha</p>
				<form action="">
					<input type="text" class="form-control" placeholder="Digite seu nome " size="50">
					<input type="email" class="form-control" placeholder="Digite seu e-mail" size="50">
					<button type="submit" class="btn btn-front">Me avise!</button>
				</form>
			</div>
		</div>
	</article>

	<section class="main_footer bg-light" style="background: url(assets/images/footer.png) repeat-x bottom center; background-size: 10%">
		<div class="container pt-5" style="padding-bottom: 120px">
			<div class="row justify-content-around text-muted">
				<div class="col-12 col-md-3 col-lg-3">
					<h1 class="pb-2">Navegue <span class="text-front">Aqui!</span></h1>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="" class="text-front">Destaque</a></li>
						<li><a href="">Alugar</a></li>
						<li><a href="">Comprar</a></li>
						<li><a href="">Contato</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-9 col-lg-6">
					<h1 class="pb-2">Nos <span class="text-front">Conheça!</span></h1>
					<p>Nossa maior satifasção é te ajudar a encontrar seu imóvel dos sonhos nos bairros do Sul da Ilha da Maringa, em Florianopolis.</p>
					<h1 class="pb-2">Quer <span class="text-front">Investir?</span></h1>
					<p>Entre me contato com nossa equipe e vamos informar sempre sobre os melhores negócios.</p>
				</div>
				<div class="col-12 col-md-12 col-lg-3 text-center">
					<button class="btn btn-front icon-facebook icon-notext"></button>
					<button class="btn btn-front icon-instagram icon-notext"></button>
					<button class="btn btn-front icon-twitter icon-notext"></button>
				</div>
			</div>
		</div>
	</section>

	<div class="main_copyright py-3 bg-front text-white text-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="mb-0">Imobiliária | CRECI 1234 | Av. Pequeno Principe, 0 - Campeche Florianopolis/SC</p class="mb-0">
					<p class="mb-0">Todos os direitos reservados - Paulo Santana</p>
				</div>
			</div>
		</div>
	</div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="node_modules/bootstrap-select/dist/js/i18n/default-pt_BR.min.js"></script>
</body>
</html>