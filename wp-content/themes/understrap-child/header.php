<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo pll_home_url('en');?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo pll_home_url('en');?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo pll_home_url('en');?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo pll_home_url('en');?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo pll_home_url('en');?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo pll_home_url('en');?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo pll_home_url('en');?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo pll_home_url('en');?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo pll_home_url('en');?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo pll_home_url('en');?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo pll_home_url('en');?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo pll_home_url('en');?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo pll_home_url('en');?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo pll_home_url('en');?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo pll_home_url('en');?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
    <!-- ******************* Top Bar Area ********************** -->
    <?php 
    if ( function_exists( 'ot_get_option' ) ) {
        $show_topbar = ot_get_option( 'show_top_bar' );
    }
    if ( isset($show_topbar) && $show_topbar == 1):
    ?>
    <div class="top-bar">
        <div class="container"> 
            <?php 
            if ( function_exists( 'ot_get_option' ) ) {
                $call_phone = ot_get_option( 'call_phone_top_bar' );
            }
            if ( isset($call_phone) && $call_phone !== NULL):
            ?>  
            <div class="call-phone">
                  <p class="custom-row-color-changer" style="font-size:13px;font-weight:600;line-height: 40px;background: #317f3d;padding: 0 17px;color:#ffffff;"><?php echo $call_phone;  ?></p>
            </div>
            <?php endif;  ?>
            <?php 
            if ( function_exists( 'ot_get_option' ) ) {
                $menu_top_bar = ot_get_option( 'menu_top_bar' );
            }
            if ( isset($menu_top_bar) && $menu_top_bar !== NULL):
            ?>
            <div class="menu-top-bar">
                 <?php foreach($menu_top_bar as $item):?>
                 <a href="<?php echo $item['menu_top_bar_link'];?>">
                    <p style="color:<?php echo $item['menu_top_bar_font_color'];?>;background:<?php echo $item['menu_top_bar_background'];?>;"><?php echo $item['title'];?>
                    <i class="<?php echo $item['menu_top_bar_font_awesome_icon'];?>"></i>
                    </p>
                 </a>
                 <?php endforeach;?>
            </div>
            <?php endif;  ?>
        </div>
    </div>
    <?php endif;  ?>
    <header>
        <div class="menu-area original">
             <div class="container">
                <form role="search" action="<?php echo get_home_url();?>" class="qodef-search-cover" method="get" >
            		<div class="qodef-container">
                		<div class="qodef-container-inner clearfix">
                						<div class="qodef-form-holder-outer" style="height: 100px;">
                				<div class="qodef-form-holder">
                					<div class="qodef-form-holder-inner">
                						<input type="text" placeholder="Search" name="s" class="qode_search_field no-livesearch" autocomplete="off">
                						<div class="qodef-search-close">
                							<a href="javascript:void(0)">
                								<i class="qodef-icon-font-awesome fa fa-times "></i>							</a>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
            	   </div>
            	</form>
                <div class="logo-menu">
                     <div class="logo">
                          <?php 
                                if ( function_exists( 'ot_get_option' ) ) {
                                $logo = ot_get_option( 'logo_image' );
                          }?>
                          <a href="<?php echo get_home_url();?>">
                          <img src="<?php echo $logo;?>"></a>
                     </div>
                     
                     <nav id="site-navigation" class="main-navigation" role="navigation">
                                <a class="menu-toggle" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu','link_before'=>'<span class="item_outer"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">','link_after'=>'</span></span><span class="plus"></span></span>' ) ); ?>
                                <?php //echo get_search_form();?>
                                <a data-icon-close-same-position="yes" class="qodef-search-opener" href="javascript:void(0)">
            <i class="qodef-icon-font-awesome fa fa-search "></i>                    </a>
                    </nav>
                    
                </div>
            </div>
        </div>
        <div class="menu-area cloned">
             <div class="container">
                <form role="search" action="<?php echo get_home_url();?>" class="qodef-search-cover" method="get" >
            		<div class="qodef-container">
                		<div class="qodef-container-inner clearfix">
                						<div class="qodef-form-holder-outer" >
                				<div class="qodef-form-holder">
                					<div class="qodef-form-holder-inner">
                						<input type="text" placeholder="Search" name="s" class="qode_search_field no-livesearch" autocomplete="off">
                						<div class="qodef-search-close">
                							<a href="javascript:void(0)">
                								<i class="qodef-icon-font-awesome fa fa-times "></i>							</a>
                						</div>
                					</div>
                				</div>
                			</div>
                		</div>
            	   </div>
            	</form>
                <div class="logo-menu">
                     <div class="logo">
                          <?php 
                                if ( function_exists( 'ot_get_option' ) ) {
                                $logo = ot_get_option( 'logo_image' );
                          }?>
                          <a href="<?php echo get_home_url();?>">
                          <img src="<?php echo $logo;?>"></a>
                     </div>
                     
                     <nav id="site-navigation" class="main-navigation" role="navigation">
                                <a class="menu-toggle" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu','link_before'=>'<span class="item_outer"><span class="item_inner"><span class="menu_icon_wrapper"><i class="menu_icon null fa"></i></span><span class="item_text">','link_after'=>'</span></span><span class="plus"></span></span>' ) ); ?>
                                <?php //echo get_search_form();?>
                                <a data-icon-close-same-position="yes" class="qodef-search-opener" href="javascript:void(0)">
            <i class="qodef-icon-font-awesome fa fa-search "></i>                    </a>
                    </nav>
                </div>
            </div>
        </div> 
        <div class="menu-area mobile">
                <div class="m-bars">
                <a href="javascript:void(0)" class="bars">
                    
                        <i class="qodef-icon-font-awesome fa fa-bars "></i>        
                </a>               </div>
                <div class="logo">
                          <?php 
                                if ( function_exists( 'ot_get_option' ) ) {
                                $logo = ot_get_option( 'logo_image' );
                          }?>
                          <a href="<?php echo get_home_url();?>">
                          <img src="<?php echo $logo;?>"></a>
                </div>
                <div class="m-menu">
                     
                     
                     <nav id="site-navigation" class="main-navigation" role="navigation">
                                
                                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu') ); ?>
                                <?php //echo get_search_form();?>
                                
                    </nav>
                </div>
            </div>
        </div>  
         
    </header>
    <a id="qodef-back-to-top" href="#" class="off">
        <span class="qodef-icon-stack">
            <i class="qodef-icon-font-awesome fa fa-chevron-up "></i>
        </span>
    </a>
	
