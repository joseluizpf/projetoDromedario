<?php /* Template Name: pre-homepage */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="pre-page">
		
		<div class="left">
			<div id="whatyoucandoBG">
				<p>Aparecer para o mundo inteiro<br>Desafiar seus amigos<br>Divulgar seu trabalho</p>
			</div>
			
			<div id="loginBG">
				<p><strong>Entrar:</strong></p>
				
				<!-- FACEBOOK LOGIN AQUI -->
				
				<form>
					<input type="text" name="email" placeholder="E-mail" id="inputEmail"><br>
					<input type="password" name="senha" placeholder="Senha" id="inputSenha">
				</form>
			</div>
			
			<div id="tutorialBG">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/tutorialUm.gif" id="tutorialUm"/>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/tutorialDois.gif" id="tutorialDois"/>
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/tutorialTres.gif" id="tutorialTres"/>
				
				<!-- REGITRAR COM FACEBOOK AQUI -->
				
				<div id="registroManualBox">
					<p><strong>Cadastrar com e-mail</strong></p>
				</div>
			</div>
			
			<!-- ilustração dos desenvolvedores -->
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/imagemDesenvolvedores.gif" id="imgDevelopers"/>
			
			<div id="quemSomosBG">
				<h1><strong>Quem somos?</strong></h1>
				<p>...</p>
			</div>
		</div> <!-- left -->
		
	</div> <!-- pre-page -->
	
</body>
