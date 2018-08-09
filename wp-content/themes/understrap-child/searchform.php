<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?> 
<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">    
        <input class=" no-livesearch" type="text" value="" placeholder="<?php echo __( 'Search', 'understrap' ); ?>" name="s" id="s">
                    <button type="submit" id="searchsubmit" ><i class="fa fa-search"></i> </button>
           
</form>
