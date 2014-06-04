<?php /* Template Name: profile */ ?>

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

<?php get_header(); ?>
		
		<div class="left">
		
			<div class="leftSide">
		
				<!-- imagem de perfil (começa com a imagem de quem nao tem imagem de perfil) -->
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/profileDefault.gif" class="profileImg"/>
		
				<div class="aboutMe">
					<p class="aboutMeTitle"><strong>Sobre mim</strong></p>
					<!-- 140 caracteres sobre a pessoa -->
					<p>Sou um homem de 19 anos que mora em porto alegre e está fazendo um teste agora para ver quanto dá 140 caracters. Deu certo ? nao sei, tchau.</p>
					
					<!-- link para a página pessoal (fica HIDDEN quando a pessoa nao colocou nada) -->
					<a href="">
						<div class="personalPage">
							<span class="personalPageTitle"><strong>Página pessoal</strong></span>
						</div>
					</a>
					
					
				</div>
		
			</div> <!-- leftSide -->
			
			<div class="profileContainer">
				<!-- barra do topo onde diz "meus dromedares" - scroll -->
				<div class="topBarChallenges">
					<span class="meusDromedaresTXT"><strong>Meus dromedares</strong></span>
				</div>
				
				<div class="desafioProfile">
				
					<!-- caixa que aparece no perfil com os desafios -->
					<div class="desafioSampleBox">
					</div>
				
					<!-- só pra ver como fica com mais de um (pode apagar) -->
					<div class="desafioSampleBox"></div>
					<div class="desafioSampleBox"></div>
					<div class="desafioSampleBox"></div>
					<div class="desafioSampleBox"></div>
					<div class="desafioSampleBox"></div>
				
				
				</div> <!-- desafioProfile -->
			
			</div> <!-- profileContainer -->
			
			<div class="profileBox" id="achievements">
					<div class="topBarProfile">
						<!-- aqui vai um "Link" para uma caixa com fundo escuro na mesma página onde mostra todos os achievements -->
						<span class="profileRightTXT"><strong>Achievements</strong></span>
					</div>
					
					<div class="containerProfileBox">
						<div class="left">
							<!-- MAX 8 IMAGENS-->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							
							<!-- só para ver como fica (pode apagar) -->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="achievement"/>
							
						</div> <!-- left -->
					</div>
			</div> <!-- profileBox -->
			
			<div class="profileBox" id="follower">
					<div class="topBarProfile">
						<!-- aqui vai um "Link" para uma caixa com fundo escuro na mesma página onde mostra todos os seguidores -->
						<span class="profileRightTXT"><strong>Seguidores</strong></span>
					</div>
					
					<div class="containerProfileBox">
						<div class="left">
							<!-- MAX 8 IMAGENS - o local da imagem é só exemplo (usuários pega do bd e nao da pasta de imagens) -->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							
							<!-- só para ver como fica (pode apagar) -->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followerImg"/>
							
						</div> <!-- left -->
					</div>
			</div> <!-- profileBox -->
			
			<div class="profileBox" id="following">
					<div class="topBarProfile">
						<!-- aqui vai um "Link" para uma caixa com fundo escuro na mesma página onde mostra todos os que estão seguindo -->
						<span class="profileRightTXT"><strong>Seguindo</strong></span>
					</div>
					
					<div class="containerProfileBox">
						<div class="left">
						
							<!-- MAX 8 IMAGENS-->
							<!-- cada imagem é um link para o perfil da pessoa -->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							
							<!-- só para ver como fica (pode apagar) -->
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							<img src="<?php echo get_bloginfo('template_directory'); ?>/images/achievements/none.gif" id="followingImg"/>
							
						</div> <!-- left -->
					</div>
			</div> <!-- profileBox -->
		</div> <!-- left -->

<?php get_footer(); ?>

</body>