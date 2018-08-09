<?php
/**
 * Template Name: Right Sidebar - News Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div
				class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php ?>

						<?php //get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						    $args = array('post_type'=>'post','posts_per_page' => 12,'paged' => $paged);
						    $query = new WP_Query( $args );
                            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                            $categories = get_the_category();
                            //print_r($categories) ;
						?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                      	<div class="qodef-post-content">
                      			<div class="qodef-post-image">
                      		<a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>">
                      			<?php echo get_the_post_thumbnail( $post->ID, array(1024,876) ); ?> </a>
                      	</div>
                      		<div class="qodef-post-text">
                      			<div class="qodef-post-text-inner">
                      				<div class="qodef-blog-standard-post-date">
                      	<span class="date"><?php the_time( 'j' ); ?></span>
                      	<span class="month"><?php echo substr(get_the_time( 'F' ),0,3); ?></span>
                        
                      </div>				<div class="qodef-blog-standard-info-holder">
                      					<h2 class="qodef-post-title">
                      	<a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>"><?php echo get_the_title();?></a>
                      </h2>					<div class="qodef-post-info">
                      						<div class="qodef-post-info-author"><?php echo esc_html_e('by','understrap');?> <a class="qodef-post-info-author-link" href="#"><?php echo get_the_author_meta('nickname');?></a></div>
                      <div class="qodef-post-info-category">
                          <?php echo esc_html_e('in','understrap');?> <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) );?>" rel="category tag"><?php echo $categories[0]->cat_name;?></a></div><div class="qodef-post-info-comments-holder"><a class="qodef-post-info-comments" href="<?php echo get_permalink();?>#respond" target="_self"><?php echo esc_html_e('Comments','understrap');?></a></div>					</div>
                      				</div>
                      				<p class="qodef-post-excerpt">
                                  
                                  <?php echo get_the_excerpt();?></p>
                                  <a href="<?php echo get_permalink();?>" target="_self" class="qodef-btn qodef-btn-small qodef-btn-default">        
                                  <span class="qodef-btn-text"><?php echo esc_html_e('Read More','understrap');?></span>   
                                   <span class="qodef-btn-text-icon"></span>
                                   </a>		
                                   	</div>
                      		</div>
                      	</div>
                      </article>

					<?php endwhile;endif; // end of the loop. ?>
                    <div class="pagination">
    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => true,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 999999999,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i class="fa fa-chevron-left"></i>' ),
            'next_text'    => sprintf( '<i class="fa fa-chevron-right"></i>'),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
</div>
				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_sidebar( 'right' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
