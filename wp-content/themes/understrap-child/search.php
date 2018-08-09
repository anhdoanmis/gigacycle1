<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>
<div class="wrapper title-single">
     <div class="<?php echo esc_attr( $container ); ?> title">
           <div class="row"><?php echo esc_html__( 'Search', 'understrap' );?></div>
     </div>
</div>
<div class="wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						    global $query_string;

//$search_query = wp_parse_str( $query_string );
$query = new WP_Query( $query_string );
                            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
                            
                            //print_r($categories) ;
						?>
                        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<div class="qodef-post-content">
							<div class="qodef-post-text">
								<div class="qodef-post-text-inner">
									<h2>
										<a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>"><?php echo get_the_title();?></a>
									</h2>
									<a href="<?php echo get_permalink();?>" target="_self" class="qodef-btn qodef-btn-small qodef-btn-default">        <span class="qodef-btn-text"><?php echo esc_html__( 'Read More', 'understrap' );?></span>    <span class="qodef-btn-text-icon"></span></a>								</div>
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

			<!-- The pagination component -->
			<?php //understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
