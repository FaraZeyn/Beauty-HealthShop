<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Fashion Designer
 */

get_header(); ?>

<div class="container">
	<main id="maincontent" role="main">
		<div class="page-content">
	    	<h1><?php echo esc_html(get_theme_mod('fashion_designer_404_page_title',__('404 Not Found','fashion-designer')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('fashion_designer_404_page_content',__('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','fashion-designer')));?></p>
			<?php if( get_theme_mod('fashion_designer_404_page_button_text','Go Back') != ''){ ?>
				<div class="more-btn">
			        <a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_theme_mod('fashion_designer_404_page_button_text',__('Go Back','fashion-designer')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fashion_designer_404_page_button_text',__('Go Back','fashion-designer')));?></span></a>
			    </div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</main>
</div>

<?php get_footer(); ?>