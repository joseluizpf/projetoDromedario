<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dromedare
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<p>oioioi</p>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dromedare' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'dromedare' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
