<?php /* Template Name: hof */ ?>

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
		
			<div class="allTimeWrapper">
			
			</div> <!-- allTimeWrapper -->
			
			<div class="banner-dayWrapper">
			
				<!-- imagem da página do hall of fame -->
				<img src="<?php echo get_bloginfo('template_directory'); ?>/images/HallOfFameBanner.gif"/>
				
				<div class="hofDay">
					
				</div>
			</div> <!-- banner-dayWrapper -->
			
			<div class="monthWrapper">
			
			</div> <!-- monthWrapper -->
		
		</div> <!-- left -->
		
	<?php get_footer(); ?>

</body>