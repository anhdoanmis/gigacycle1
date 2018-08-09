<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>



    <footer>
    
    	<div class="footer-area">
            <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="">
                    <?php dynamic_sidebar( 'footer_1' ); ?>
                </div>
            </div>
            <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">    
                <div class="">
                    <?php dynamic_sidebar( 'footer_2' ); ?>
                </div>
            </div>
            <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12"> 
                <div class="">
                    <?php dynamic_sidebar( 'footer_3' ); ?>
                </div> 
            </div>
            <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="">
                    <?php dynamic_sidebar( 'footer_4' ); ?>
                </div>
            </div>         
        </div>
    
    </footer><!-- #colophon -->

		

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

