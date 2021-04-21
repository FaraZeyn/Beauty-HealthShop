<?php
	/*------------------------------ Global First Color -----------*/

	$fashion_designer_first_color = get_theme_mod('fashion_designer_first_color');

	$fashion_designer_custom_css = '';

	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.left-bg, .right-bg, #slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #sidebar .custom-social-icons i:hover, .scrollup, #footer-2, input[type="submit"], .more-btn a, #sidebar h3, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, .toggle-nav i, #comments a.comment-reply-link, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, #footer .custom-social-icons i:hover, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .wp-block-button__link{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='#footer li a:hover, .post-main-box:hover h3, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .post-main-box:hover h3 a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .textwidget p a, .post-main-box:hover h2 a, #footer .custom-social-icons i, #sidebar ul li a:hover, .post-main-box:hover .entry-date a, .post-main-box:hover .entry-author a, .single-post .post-info:hover a{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='#slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .tagcloud a:hover, #footer .custom-social-icons i, #footer .custom-social-icons i:hover{';
			$fashion_designer_custom_css .='border-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.main-navigation ul ul{';
			$fashion_designer_custom_css .='border-top-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.main-navigation ul ul, .header-fixed{';
			$fashion_designer_custom_css .='border-bottom-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------------------ Global Second Color -----------*/

	$fashion_designer_second_color = get_theme_mod('fashion_designer_second_color');

	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='a, .icon-ctr i, .info-ctr i, .info-ctr p, .search-box i, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .woocommerce-product-search button, #sidebar .woocommerce-product-search button, #sidebar h3, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar input[type="submit"], .more-btn a, #comments input[type="submit"], #footer a.custom_read_more, #sidebar a.custom_read_more{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_second_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='.wp-block-button__link{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_second_color).'!important;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='#footer a.custom_read_more:hover{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_second_color).';';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_width_option','Full Width');
    if($fashion_designer_theme_lay == 'Boxed'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='width: 97.4%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Wide Width'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='width: 97.7%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Full Width'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='max-width: 100%;';
		$fashion_designer_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_slider_opacity_color','0.4');
	if($fashion_designer_theme_lay == '0'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.1'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.1';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.2'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.2';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.3'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.3';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.4'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.4';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.5'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.5';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.6'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.6';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.7'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.7';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.8'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.8';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.9'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.9';
		$fashion_designer_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_slider_content_option','Center');
    if($fashion_designer_theme_lay == 'Left'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:left; left:15%; right:45%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Center'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:center; left:20%; right:20%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Right'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:right; left:45%; right:15%;';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$fashion_designer_slider_height = get_theme_mod('fashion_designer_slider_height');
	if($fashion_designer_slider_height != false){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_slider_height).';';
		$fashion_designer_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$fashion_designer_slider = get_theme_mod('fashion_designer_slider_arrows');
	if($fashion_designer_slider == false){
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='position: static; background: #1b1a18; padding-bottom: 20px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.fashion-box{';
			$fashion_designer_custom_css .='margin-top: 20px;';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_blog_layout_option','Default');
    if($fashion_designer_theme_lay == 'Default'){
		$fashion_designer_custom_css .='.post-main-box{';
			$fashion_designer_custom_css .='';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Center'){
		$fashion_designer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn{';
			$fashion_designer_custom_css .='text-align:center;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info{';
			$fashion_designer_custom_css .='margin-top:10px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info hr{';
			$fashion_designer_custom_css .='margin:15px auto;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Left'){
		$fashion_designer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn, #our-services p{';
			$fashion_designer_custom_css .='text-align:Left;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info hr{';
			$fashion_designer_custom_css .='margin-bottom:10px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-main-box h2{';
			$fashion_designer_custom_css .='margin-top:10px;';
		$fashion_designer_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$fashion_designer_resp_stickyheader = get_theme_mod( 'fashion_designer_stickyheader_hide_show',false);
	if($fashion_designer_resp_stickyheader == true && get_theme_mod( 'fashion_designer_sticky_header',false) != true){
    	$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:static;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_stickyheader == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:fixed;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_stickyheader == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:static;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_resp_slider = get_theme_mod( 'fashion_designer_resp_slider_hide_show',false);
	if($fashion_designer_resp_slider == true && get_theme_mod( 'fashion_designer_slider_arrows', false) == false){
    	$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_slider == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:block;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_slider == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_sidebar = get_theme_mod( 'fashion_designer_sidebar_hide_show',true);
    if($fashion_designer_sidebar == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#sidebar{';
			$fashion_designer_custom_css .='display:block;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_sidebar == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#sidebar{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_resp_scroll_top = get_theme_mod( 'fashion_designer_resp_scroll_top_hide_show',true);
	if($fashion_designer_resp_scroll_top == true && get_theme_mod( 'fashion_designer_hide_show_scroll',true) != true){
    	$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:hidden !important;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_scroll_top == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:visible !important;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_scroll_top == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:hidden !important;';
		$fashion_designer_custom_css .='} }';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$fashion_designer_sticky_header_padding = get_theme_mod('fashion_designer_sticky_header_padding');
	if($fashion_designer_sticky_header_padding != false){
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_sticky_header_padding).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$fashion_designer_search_font_size = get_theme_mod('fashion_designer_search_font_size');
	if($fashion_designer_search_font_size != false){
		$fashion_designer_custom_css .='.search-box i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_search_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$fashion_designer_button_padding_top_bottom = get_theme_mod('fashion_designer_button_padding_top_bottom');
	$fashion_designer_button_padding_left_right = get_theme_mod('fashion_designer_button_padding_left_right');
	if($fashion_designer_button_padding_top_bottom != false || $fashion_designer_button_padding_left_right != false){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_button_padding_top_bottom).'; padding-bottom: '.esc_attr($fashion_designer_button_padding_top_bottom).';padding-left: '.esc_attr($fashion_designer_button_padding_left_right).';padding-right: '.esc_attr($fashion_designer_button_padding_left_right).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_button_border_radius = get_theme_mod('fashion_designer_button_border_radius');
	if($fashion_designer_button_border_radius != false){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_button_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$fashion_designer_single_blog_post_navigation_show_hide = get_theme_mod('fashion_designer_single_blog_post_navigation_show_hide',true);
	if($fashion_designer_single_blog_post_navigation_show_hide != true){
		$fashion_designer_custom_css .='.post-navigation{';
			$fashion_designer_custom_css .='display: none;';
		$fashion_designer_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$fashion_designer_copyright_alingment = get_theme_mod('fashion_designer_copyright_alingment');
	if($fashion_designer_copyright_alingment != false){
		$fashion_designer_custom_css .='.copyright p{';
			$fashion_designer_custom_css .='text-align: '.esc_attr($fashion_designer_copyright_alingment).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_copyright_padding_top_bottom = get_theme_mod('fashion_designer_copyright_padding_top_bottom');
	if($fashion_designer_copyright_padding_top_bottom != false){
		$fashion_designer_custom_css .='#footer-2{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($fashion_designer_copyright_padding_top_bottom).';';
		$fashion_designer_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$fashion_designer_scroll_to_top_font_size = get_theme_mod('fashion_designer_scroll_to_top_font_size');
	if($fashion_designer_scroll_to_top_font_size != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_scroll_to_top_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_padding = get_theme_mod('fashion_designer_scroll_to_top_padding');
	$fashion_designer_scroll_to_top_padding = get_theme_mod('fashion_designer_scroll_to_top_padding');
	if($fashion_designer_scroll_to_top_padding != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_scroll_to_top_padding).';padding-bottom: '.esc_attr($fashion_designer_scroll_to_top_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_width = get_theme_mod('fashion_designer_scroll_to_top_width');
	if($fashion_designer_scroll_to_top_width != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_scroll_to_top_width).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_height = get_theme_mod('fashion_designer_scroll_to_top_height');
	if($fashion_designer_scroll_to_top_height != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_scroll_to_top_height).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_border_radius = get_theme_mod('fashion_designer_scroll_to_top_border_radius');
	if($fashion_designer_scroll_to_top_border_radius != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_scroll_to_top_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$fashion_designer_social_icon_font_size = get_theme_mod('fashion_designer_social_icon_font_size');
	if($fashion_designer_social_icon_font_size != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_social_icon_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_padding = get_theme_mod('fashion_designer_social_icon_padding');
	if($fashion_designer_social_icon_padding != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_social_icon_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_width = get_theme_mod('fashion_designer_social_icon_width');
	if($fashion_designer_social_icon_width != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_social_icon_width).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_height = get_theme_mod('fashion_designer_social_icon_height');
	if($fashion_designer_social_icon_height != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_social_icon_height).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_border_radius = get_theme_mod('fashion_designer_social_icon_border_radius');
	if($fashion_designer_social_icon_border_radius != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_social_icon_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$fashion_designer_products_padding_top_bottom = get_theme_mod('fashion_designer_products_padding_top_bottom');
	if($fashion_designer_products_padding_top_bottom != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($fashion_designer_products_padding_top_bottom).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_padding_left_right = get_theme_mod('fashion_designer_products_padding_left_right');
	if($fashion_designer_products_padding_left_right != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='padding-left: '.esc_attr($fashion_designer_products_padding_left_right).'!important; padding-right: '.esc_attr($fashion_designer_products_padding_left_right).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_box_shadow = get_theme_mod('fashion_designer_products_box_shadow');
	if($fashion_designer_products_box_shadow != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$fashion_designer_custom_css .='box-shadow: '.esc_attr($fashion_designer_products_box_shadow).'px '.esc_attr($fashion_designer_products_box_shadow).'px '.esc_attr($fashion_designer_products_box_shadow).'px #ddd;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_border_radius = get_theme_mod('fashion_designer_products_border_radius');
	if($fashion_designer_products_border_radius != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_products_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}
	