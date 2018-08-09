<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
global $post;

?>
<div class="wrapper title-single">
     <div class="<?php echo esc_attr( $container ); ?> title">
           <div class="row"><?php echo get_the_title($post->ID);?></div>
     </div>
</div>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php $categories = get_the_category();//understrap_post_nav();
                              $cat_link = isset($categories[0]) ? esc_url( get_category_link( $categories[0]->term_id ) ) :'#';
                              $cat_name = isset($categories[0]) ? $categories[0]->cat_name : '';
                         ?>
                         <div class="qodef-blog-holder qodef-blog-single">
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="qodef-post-content">
			<div class="qodef-post-image">
			<?php echo get_the_post_thumbnail( $post->ID, array(1024,576) ); ?>
		<div class="qodef-post-text">
			<div class="qodef-post-text-inner">
				<div class="qodef-blog-standard-post-date">
		<span class="date"><?php the_time( 'j' ); ?></span>
                      	<span class="month"><?php echo substr(get_the_time( 'F' ),0,3); ?></span>
</div>				<div class="qodef-blog-standard-info-holder">
					<h2 class="qodef-post-title"><?php echo get_the_title();?></h2>					<div class="qodef-post-info">
						<div class="qodef-post-info-author"><?php echo esc_html_e('by','understrap');?> <a class="qodef-post-info-author-link" href="#"><?php echo get_the_author_meta('nickname');?></a></div>
<div class="qodef-post-info-category">
    <?php echo esc_html_e('in','understrap');?> <a href="<?php echo $cat_link;?>" rel="category tag"><?php echo $cat_name;?></a></div><div class="qodef-post-info-comments-holder"><a class="qodef-post-info-comments" href="<?php echo get_permalink();?>#respond" target="_self"><?php echo esc_html_e('Comments','understrap');?></a></div>					</div>
				</div>
				<figure class="media-landscape no-caption full-width lead">
</figure>
<?php the_content();?>
			</div>        
		</div>
	</div>
	<div class="qodef-post-info-bottom">
		<div class="qodef-blog-share">
	</div>	</div></div>
</article>

								
							


	</div>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
