<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dromedare
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/footer.gif"/>
		<div class="site-info">
			<!-- botar um link direto para mandar um e-mail se possivel em volta do contato -->
			<p class="contato">CONTATO</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
