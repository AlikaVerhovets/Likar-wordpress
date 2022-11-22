<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-doctor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article">
		<div class="article-box">
			<header class="article-header">
				<?php if ( is_singular() ) : the_title( '<h1 class="entry-title">', '</h1>' );
				else : the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;  
				if ( is_home() && ! is_front_page() ) :?>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				<?php endif; ?>
			</header> 
		</div>
	</div>
	<div class="article-box">
		<div class="article-content">
		<?php the_content(  ) ?>
		</div>
		<footer class="entry-footer">
			<?php test_doctor_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
