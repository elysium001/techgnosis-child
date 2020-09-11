<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techgnosis-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card-post'); ?>>
	<div class="entry-content">
		<?php
			if ( is_singular() ) :
				techgnosis_theme_post_thumbnail();

				the_title( '<h1 class="entry-title">', '</h1>' );
				the_content();
				?>
				<footer class="entry-footer">
					<?php techgnosis_theme_posted_on();	 ?>
				</footer><!-- .entry-footer -->
				<?php
			else :
				echo '<div class="card">';
				techgnosis_theme_post_thumbnail();
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				if( ! get_the_post_thumbnail_url() ){
					the_excerpt();
				}
				echo '</div>';
			endif;
				?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
