<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="">
				<div class="headerabout-section">
					<div class="headerabout-section-text">
						<div>

							<?php
							the_archive_title( '<h2 class="headerabout-text">', '</h2>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
							<h4 class="headerabout-text"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>
						</div>          
					</div>
				</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'minimized' );

			endwhile;

			the_posts_pagination( array(
				'next_text' => pll__('Next_page'),
				'prev_text' => pll__('Prev_page'),
				'end_size' => 1,
				'mid_size' => 0,
			));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		

	</main><!-- #main -->

<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>
