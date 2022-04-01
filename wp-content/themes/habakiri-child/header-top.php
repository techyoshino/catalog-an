<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://cdn.staticfile.org/element-ui/2.11.1/theme-chalk/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'habakiri_before_container' ); ?>
<div id="container">
	<?php
	$header_classes     = Habakiri::get_header_classses();
	$site_branding_size = Habakiri::get_site_branding_size();
	$gnav_size          = Habakiri::get_gnav_size();
	?>
	<header id="header" class="header <?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
		<?php do_action( 'habakiri_before_header_content' ); ?>
		<div class="container-header">
			
			<div class="header__content">

				<div class="logo">
					<div class="logo-toptext"><?php bloginfo( 'description' ); ?></div>
					<div class="logo-bottomtext"><?php get_template_part( 'modules/site-branding' ); ?></div>
				<!-- end .header__col --></div>
				<form method="get" action="https://search.kikaicatalog.com/products" class="search_container">
				<div class="search">
					<div class="search-input el-input"><!---->
						<input type="text" class="el-input__inner" placeholder="検索キーワードを入力してください" name="keyword">
					</div> 
					<button type="submit" class="search-button">	<i class="el-icon-search"></i> </button>
				<!-- <div class="search-button"><i class="el-icon-search"></i></div> -->
				</form>
				<!-- end .search--></div>


				<div class="header__col global-nav-wrapper clearfix">
					<?php get_template_part( 'modules/gnav' ); ?>
					<!-- <div id="responsive-btn"></div> -->

					<div class="hamburger-button" id="hamburger-button" onclick="opennaviBtn()">
						<div class="bar bar1"></div> 
						<div class="bar bar2"></div> 
						<div class="bar bar3"></div>
					</div>
					

				<!-- end .header__col --></div>	



				<div class="drawer" id="drawer">

					<div data-v-99f36d20="" class="drawer-link header-navi" style="cursor: default;">
					MENU
						<div style="cursor: pointer;" class="btn_close" id="btn_close" onclick="closenaviBtn()">
							<img src="https://i.imgur.com/kIGyYqU.png" alt="">
						</div>
					</div>
					
			
					<?php
					wp_nav_menu( array( 
						'menu' => 'menu1' 
					  ) );
					  
					?>
				</div>

				
			<!-- end .row --></div>
		<!-- end .container --></div>
		<?php do_action( 'habakiri_after_header_content' ); ?>
	<!-- end #header --></header>
	<div id="contents">
		<?php do_action( 'habakiri_before_contents_content' ); ?>

	

		<!-- modal  Translations-->

		<div id="backdrop"></div>




