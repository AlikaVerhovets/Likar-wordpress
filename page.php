<?php 
if(pll_current_language() == 'ru'){
  get_header('ru');
} else if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>

<?php the_post(); ?>
<?php the_content(); ?>
    
<?php 
if(pll_current_language() == 'ru'){
  get_footer('ru');
} else if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>