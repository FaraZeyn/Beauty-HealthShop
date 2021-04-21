<?php
//about theme info
add_action( 'admin_menu', 'fashion_designer_gettingstarted' );
function fashion_designer_gettingstarted() {
	add_theme_page( esc_html__('About Fashion Designer', 'fashion-designer'), esc_html__('About Fashion Designer', 'fashion-designer'), 'edit_theme_options', 'fashion_designer_guide', 'fashion_designer_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function fashion_designer_admin_theme_style() {
   wp_enqueue_style('fashion-designer-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('fashion-designer-tabs', esc_url(get_template_directory_uri()) . '/inc/getstarted/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'fashion_designer_admin_theme_style');

//guidline for about theme
function fashion_designer_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fashion-designer' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Fashion Theme', 'fashion-designer' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','fashion-designer'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Fashion Designer at 20% Discount','fashion-designer'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','fashion-designer'); ?> ( <span><?php esc_html_e('vwpro20','fashion-designer'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( FASHION_DESIGNER_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'fashion-designer' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="fashion_designer_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'fashion-designer' ); ?></button>
		  	<button class="tablinks" onclick="fashion_designer_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'fashion-designer' ); ?></button>
		  	<button class="tablinks" onclick="fashion_designer_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'fashion-designer' ); ?></button>
		  	<button class="tablinks" onclick="fashion_designer_open_tab(event, 'lite_pro')"><?php esc_html_e( 'Support', 'fashion-designer' ); ?></button>
		</div>

		<div id="block_pattern" class="tabcontent open">
			<div class="block-pattern-img">
				<h3><?php esc_html_e( 'Block Patterns', 'fashion-designer' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','fashion-designer'); ?></p>
	          	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','fashion-designer'); ?></span></b></p>
	          	<div class="fashion-designer-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>" target="_blank" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','fashion-designer'); ?></a>
			    </div>
	          	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/block-pattern.png" alt="" />
	        </div>	

	       	<div class="block-pattern-link-customizer">
              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'fashion-designer' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','fashion-designer'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-networking"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_social_icon_settings') ); ?>" target="_blank"><?php esc_html_e('Social Icons','fashion-designer'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','fashion-designer'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','fashion-designer'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','fashion-designer'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','fashion-designer'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','fashion-designer'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','fashion-designer'); ?></a>
								</div> 
							</div>
						</div>
				</div>	
			</div> 
		</div>

		<div id="lite_theme" class="tabcontent">
			<h3><?php esc_html_e( 'Lite Theme Information', 'fashion-designer' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('Fashion designer is a theme of premium category solely crafted for the fashion designers or fashion stylists or people who are associated with the business related to fashion or associated areas. It is a multipurpose, minimal and elegant theme making it a preferable one for the make-up artists, beauty salon operators well as personal designers. Being sophisticated, retina ready and user-friendly and accompanied with testimonial section, personalization options plus Bootstrap and CTA, this WordPress theme of premium level is good for the cosmetic boutique business and for the makeup salon as well as hair stylists. Fashion Designer  WordPress theme is social media and SEO friendly and apart from that, the theme is accompanied with optimised codes, clean codes and has the faster page load time. Fashion designer is also good for nail salon, visage salon, makeup studio, beauty blog, glamour and others. Since it is mobile friendly, responsive as well as translation ready, this premium wp theme can also be used to create blogs related to fashion, beauty, lifestyle, make up, gossip or food or journal blog and there is no requirement to write a single line of code. Fashion designer has the potential to create an exotic feminine fashion blog and is also a preferable one for bloggers, newspapers, writers or journalists.','fashion-designer'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'fashion-designer' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'fashion-designer' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'fashion-designer' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'fashion-designer'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'fashion-designer'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'fashion-designer'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'fashion-designer'); ?></a>
				</div>
		  		<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'fashion-designer' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','fashion-designer'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','fashion-designer'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_global_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','fashion-designer'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_category_section') ); ?>" target="_blank"><?php esc_html_e('Fashion Category','fashion-designer'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','fashion-designer'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','fashion-designer'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','fashion-designer'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','fashion-designer'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','fashion-designer'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=fashion_designer_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','fashion-designer'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','fashion-designer'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','fashion-designer'); ?></p>
                <ul>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','fashion-designer'); ?></span><?php esc_html_e(' Go to ','fashion-designer'); ?>
				  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','fashion-designer'); ?></b></p>

                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','fashion-designer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','fashion-designer'); ?></span><?php esc_html_e(' Go to ','fashion-designer'); ?>
				  	<b><?php esc_html_e(' Settings >> Reading ','fashion-designer'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','fashion-designer'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, then follow the','fashion-designer'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-fashion-designer/" target="_blank"><?php esc_html_e('Documentation','fashion-designer'); ?></a></p>
                </ul>
		  	</div>
		</div>	

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'fashion-designer' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Fashion designer WordPress theme is creative as well as sharp and is pliable and responsive making it a preferable choice for the fashion industry as well as fashion designers or the startups who want to excel in the fashion related business. With this theme, you are in a position to craft the websites of professional quality because of certain mind-blowing features like customization and personalization options, retina ready, Bootstrap, CTA, translation readiness, clean code, testimonial section and much more-all making this theme good for the makeup artists as well as personal designers. Fashion designer WP theme is good for cosmetics boutique, makeup salon, hairstylist, fashion blog, hairdresser, nail salon, visage salon, makeup studio, beauty blog, glamour, and others. Since this WP theme is clean and animated, it can be used to create fashion, lifestyle, beauty, makeup, gossip, food or a journal blog without writing a single line of code. Since it is luxurious with shortcodes, feminine fashion blog can be created as well.','fashion-designer'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( FASHION_DESIGNER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'fashion-designer'); ?></a>
					<a href="<?php echo esc_url( FASHION_DESIGNER_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'fashion-designer'); ?></a>
					<a href="<?php echo esc_url( FASHION_DESIGNER_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'fashion-designer'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'fashion-designer' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'fashion-designer'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'fashion-designer'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'fashion-designer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'fashion-designer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'fashion-designer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'fashion-designer'); ?></td>
								<td class="table-img"><?php esc_html_e('15', 'fashion-designer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'fashion-designer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'fashion-designer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'fashion-designer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'fashion-designer'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'fashion-designer'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'fashion-designer'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'fashion-designer'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( FASHION_DESIGNER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'fashion-designer'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="lite_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'fashion-designer'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'fashion-designer'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'fashion-designer'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','fashion-designer'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'fashion-designer'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'fashion-designer'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( FASHION_DESIGNER_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'fashion-designer'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>