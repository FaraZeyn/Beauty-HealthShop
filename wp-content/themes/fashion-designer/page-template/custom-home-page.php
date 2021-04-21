<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">

  <?php do_action( 'fashion_designer_before_slider' ); ?>

  <?php if( get_theme_mod( 'fashion_designer_slider_arrows', false) != '' || get_theme_mod( 'fashion_designer_resp_slider_hide_show', false) != '') { ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod( 'fashion_designer_slider_speed',3000)) ?>"> 
        <?php $fashion_designer_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'fashion_designer_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $fashion_designer_pages[] = $mod;
            }
          }
          if( !empty($fashion_designer_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $fashion_designer_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php if( get_theme_mod('fashion_designer_slider_button_text','READ MORE') != ''){ ?>
                    <div class="more-btn">
                      <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('fashion_designer_slider_button_text',__('READ MORE','fashion-designer')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fashion_designer_slider_button_text',__('READ MORE','fashion-designer')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','fashion-designer' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','fashion-designer' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'fashion_designer_after_slider' ); ?>

  <?php if( get_theme_mod( 'fashion_designer_category') != '') { ?>
    <section class="fashion-cat">
      <div class="container">
        <div class="fashion-box">
          <div class="row">        
            <?php 
            $fashion_designer_catData=  get_theme_mod('fashion_designer_category');
              if($fashion_designer_catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $fashion_designer_catData ,'fashion-designer')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="box">
                      <?php the_post_thumbnail(); ?>
                      <div class="box-content">
                        <div class="row">
                          <div class="col-lg-10 col-md-9 col-9">
                            <?php the_category(); ?>
                            <h2><?php the_title();?></h2>
                          </div>
                          <div class="col-lg-2 col-md-3 col-3 read-btn">
                            <a href="<?php echo esc_url( get_permalink() );?>"><i class="<?php echo esc_attr(get_theme_mod('fashion_designer_category_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
              wp_reset_postdata();
            } ?>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php do_action( 'fashion_designer_after_service' ); ?>

  <div id="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>
