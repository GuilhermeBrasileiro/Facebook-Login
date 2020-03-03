<!DOCTYPE html>
<html>
<head>
	<title>Facebook - Login</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!-- logo -->

			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email">
				</div><!-- form-element -->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password">
				</div><!-- form-element -->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div><!-- form-element -->
				<p class="forget-pass">Esqueceu a conta?</p>			
			</form><!-- form-login -->
			<div class="clear"></div>
		</div><!-- center -->
	</header>

	<section class="main">
		<div class="center">
				<div class="img-main">
					<h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
					<img src="img.png">
				</div><!-- img-main -->

				<div class="new-account">
					<h2>Abra uma conta</h2>
					<h3>É rápido e fácil.</h3>

					<form class="create-account">

						<div class="w50">
							<input type="text" placeholder="Nome">
						</div><!-- w50 -->

						<div class="w50">
							<input type="text" placeholder="Sobrenome">
						</div><!-- w50 -->

						<div class="w100">
							<input type="email" placeholder="E-mail">
						</div><!-- w100 -->

						<div class="w100">
							<input type="password" placeholder="Senha">
						</div><!-- w100 -->

						<div class="w100">
							<h2>Data de nascimento:</h2>
							<select name="birth-day" class="birth">
								<?php
									for($i = 1; $i <= 31; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="birth-month" class="birth">
								<?php
									for($i = 1; $i <= 12; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="birth-year" class="birth">
								<?php
									for($i = 1920; $i <= 2020; $i++){
								?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<div class="clear"></div>
						</div><!-- w100 -->

						<div class="w100">
							<h2>Gênero</h2>
							<div class="input-radio">
								<input type="radio" name="sex" value="masculino"><h2>Masculino</h2>
							</div><!-- input-radio -->

							<div class="input-radio">
								<input type="radio" name="sex" value="feminino"><h2>Feminino</h2>
							</div><!-- input-radio -->

							<div class="input-radio">
								<input type="radio" name="sex" value="personalizado"><h2>Personalizado</h2>
							</div><!-- input-radio -->
						</div><!-- w100 -->

						<p>Ao clicar em Cadastre-se, você concorda com nossos <a href="">Termos, Política de Dados e Política de Cookies.</a> Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
						<div class="w100">
							<input type="submit" name="acao" value="Cadastre-se">
						</div><!-- w100 -->

						<span><a href="">Criar uma Página</a> para uma celebridade, banda ou empresa.</span>

						<div class="clear"></div>
					</form>	<!-- create-account -->
				</div><!-- new-account -->

				<div class="clear"></div>
		</div><!-- center -->
	</section><!-- main -->

	<section class="languages">
		<div class="center">
			<a class="selected-language" href="">Português (BR)</a>
			<a href="">English (US)</a>
			<a href="">Español</a>
			<a href="">Français (France)</a>
			<a href="">Italiano</a>
			<a href="">Deutsch</a>
			<a href="">لعربية </a>
			<a href="">हिन्दी</a>
			<a href="">中文(简体)</a>
			<a href="">日本語</a>
		</div><!-- center -->
	</section><!-- languages -->

	<section class="misc">
		<div class="center">
			<a href="">Sign Up</a>
			<a href="">Log In</a>
			<a href="">Messenger</a>
			<a href="">Facebook Lite</a>
			<a href="">Watch</a>
			<a href="">People</a>
			<a href="">Pages</a>
			<a href="">Page Categories</a>
			<a href="">Places</a>
			<a href="">Games</a>
			<a href="">Locations</a>
			<a href="">Marketplace</a>
			<a href="">Groups</a>
			<a href="">Instagram</a>
			<a href="">Local</a>
			<a href="">Fundraisers</a>
			<a href="">Services</a>
			<a href="">About</a>
			<a href="">Create Ad</a>
			<a href="">Create Page</a>
			<a href="">Developers</a>
			<a href="">Careers</a>
			<a href="">Privacy</a>
			<a href="">Cookies</a>
			<a href="">Ad Choices</a>
			<a href="">Terms</a>
			<a href="">Help</a>
		</div><!-- center -->
	</section><!-- misc -->

	<footer>
		<div class="center">
			<span>Facebook © 2020</span>
		</div><!-- center -->
	</footer>
</body>
</html>