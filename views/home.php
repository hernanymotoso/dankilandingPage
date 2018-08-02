<!doctype html>
<html>
	<head>
		<title>Projeto 01</title>
		<link href="<?php echo BASE_URL; ?>/assets/css/style.css" type="text/css" rel="stylesheet"/>
		<meta charset="utf-8" />
		<meta name="description" content="Descricao do site"/>
		<meta name="keywords" content="palavras-chave,separadas,por,virgula">
		<meta name="author" content="Hernany"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">	
	</head>
	
	<body>
		<div class="header">
			<div class="center">
				<img src="<?php echo BASE_URL; ?>/assets/images/logo.png"/>
			</div><!--center-->
		</div><!--header-->	
		<div class="container-banner">
			<div class="center">
				<div><!--DIV CEGA-->
					<div class="container-list">
						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
						</ul>
					</div><!--container-list-->
				</div>
				<div><!--DIV CEGA-->
					<div class="form">
						<h2>
							Preencha o formulário e inicie a sua caminhada para virar um webmaster!
						</h2>
						<form method="POST" action="/home">
							<div class="input-container">
								<span>Nome*</span>
								<input type="text" name="nome" required />
							</div><!--input-container-->
							<div class="input-container">
								<span>E-mail*</span>
								<input type="text" name="email" required />
							</div><!--input-container-->
							<div class="input-container">
								<span>Telefone*</span>
								<input type="text" name="phone" required />
							</div><!--input-container-->
							<p class="warning">*Campos obrigatórios</p>
							<div class="input-submit-container">
								<input type="submit" name="acao" value="Enviar">
							</div><!--input-submit-container-->
						</form>
					</div><!--form-->
				</div>
				<div class="clear"></div><!--clear-->
			</div><!--center-->
		</div><!--container-banner-->
		<div class="container-2">
			<div class="center">
				<h2>Lorem ipsum</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde expedita quisquam nihil aliquam voluptatum quod sequi ipsam veniam harum. Reprehenderit odit suscipit, aliquid omnis quia quisquam. Fugit obcaecati tempore labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde expedita quisquam nihil aliquam voluptatum quod sequi ipsam veniam harum. Reprehenderit odit suscipit, aliquid omnis quia quisquam. Fugit obcaecati tempore labore.voluptatum quod sequi ipsam veniam harum. Reprehenderit odit suscipit, aliquid omnis quia quisquam. Fugit obcaecati tempore labore.</p>
			</div><!--center-->	

			<div class="arrow"></div><!--arrow-->

		</div><!--container-2-->

		<div class="section-1">
			<div class="center">
				<h2>Aprenda com que está no mercado</h2>

				<div class="container-section">

					<div class="container-single">

						<div><img src="<?php echo BASE_URL; ?>/assets/images/icon.png"/></div>

						<div class="text-container-single">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolores quod quos quae, blanditiis delectus velit, eaque quas facere aliquam earum in quisquam quo autem nisi, eligendi quia quibusdam aperiam?</p>
						</div><!--text-container-single-->
					</div><!--container-single-->

					<div class="container-single">

						<div><img src="<?php echo BASE_URL; ?>/assets/images/icon.png"/></div>

						<div class="text-container-single">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolores quod quos quae, blanditiis delectus velit, eaque quas facere aliquam earum in quisquam quo autem nisi, eligendi quia quibusdam aperiam?</p>
						</div><!--text-container-single-->

					</div><!--container-single-->

					<div class="container-single">

						<div><img src="<?php echo BASE_URL; ?>/assets/images/icon.png"/></div>

						<div class="text-container-single">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolores quod quos quae, blanditiis delectus velit, eaque quas facere aliquam earum in quisquam quo autem nisi, eligendi quia quibusdam aperiam?</p>
						</div><!--text-container-single-->

					</div><!--container-single-->
					
				</div><!--container-section-->

				<div class="clear"></div><!--clear-->

			</div><!--center-->
		</div><!--section-1-->

		
		<div class="footer">
			<p>Todos os direitos reservados</p>
			<p>Av. Lorem Ipsum, silor domor 211 - Florianopolis</p>
		</div><!--footer-->

	</body>
</html>