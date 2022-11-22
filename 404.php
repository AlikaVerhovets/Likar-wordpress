<?php 
if(pll_current_language() == 'ru'){
  get_header('ru');
} else if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"><?php pll_e('Nothing_here'); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php pll_e('Nothing_here_text'); ?></p>

					<?php
					get_search_form();

					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php 
if(pll_current_language() == 'ru'){
  get_footer('ru');
} else if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>
