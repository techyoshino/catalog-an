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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T9BR5RL');</script>
	<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9BR5RL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'habakiri_before_container' ); ?>



<div id="container" class="container-other">
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

					<div class="logo-container">

						<div class="logo-toptext"><?php bloginfo( 'description' ); ?></div>
						
						<?php
						/*
						<div class="logo-toptext" style="text-align: center;font-size: 13px;color: #000;font-weight: bold;">
							β版公開中<br>
							2023年4月3日正式リリース
						</div>
						*/
						?>

						<div class="logo-bottomtext"><?php get_template_part( 'modules/site-branding' ); ?></div>
					</div>

					<div class="search">

						<form method="get" action="https://search.kikaicatalog.com/products" class="search_container">
						<div class="search-txt">
							<div class="search-input el-input"><!---->
								<input type="text" class="el-input__inner" placeholder="検索キーワードを入力してください" name="keyword">
							</div> 
							<button type="submit" class="search-button">	<i class="el-icon-search"></i> </button>
						<!-- <div class="search-button"><i class="el-icon-search"></i></div> -->
						</form>
						<!-- end .earch-txt--></div>

					</div>

				<!-- logo--></div>

				

				<div class="navbar-right">
					
				
					<?php if (!$_SESSION['oauth2_authorize_user_info']['email']) : ?>
						<div class="mr10">
							<?php echo do_shortcode('[oauth2_authorize_login_button]'); ?>
						</div>
						<div class="mr20">
							<?php echo do_shortcode('[oauth2_authorize_register_button]'); ?>
						</div>
					<?php else : ?>
						<div class="auth-button-container logout-btn">
							<div class="auth-txt mr20">
								<?php echo $_SESSION['oauth2_authorize_user_info']['email']; ?>
							</div>
							<div class="mr20">
								<?php echo do_shortcode('[oauth2_authorize_logout_button]'); ?>
							</div>
						</div>
					<?php endif; ?>
			

					<div class="header__col global-nav-wrapper clearfix">
						<?php get_template_part( 'modules/gnav' ); ?>
						<!-- <div id="responsive-btn"></div> -->

						<div class="hamburger-button" id="hamburger-button" onclick="opennaviBtn()">
							<div class="bar bar1"></div> 
							<div class="bar bar2"></div> 
							<div class="bar bar3"></div>
						</div>
						

					<!-- end .header__col --></div>	

				</div>



				<div class="drawer" id="drawer">

						<div data-v-99f36d20="" class="drawer-link header-navi" style="cursor: default;">
						MENU
							<div style="cursor: pointer;" class="btn_close" id="btn_close" onclick="closenaviBtn()">
								<img src="<?php echo get_template_directory_uri(); ?>/images/hamburger_close_tb.png" alt="">
							</div>
						</div>

						<div class="search">

							<form method="get" action="https://search.kikaicatalog.com/products" class="search_container">
							<div class="search-txt">
								<div class="search-input el-input"><!---->
									<input type="text" class="el-input__inner" placeholder="検索キーワードを入力してください" name="keyword">
								</div> 
								<button type="submit" class="search-button">	<i class="el-icon-search"></i> </button>
							<!-- <div class="search-button"><i class="el-icon-search"></i></div> -->
							
							<!-- end .earch-txt--></div></form>

						</div>

				
						<div class="auth-button-container login-btn">

						<?php
						/*
							<div class="auth-button mr10"><a href="#">ログイン</a></div> 
							<div class="auth-button mr20"><a href="#">新規登録</a></div>
						*/
						?>	

							<?php if (!$_SESSION['oauth2_authorize_user_info']['email']) : ?>
								<div class="auth-button mr10">
									<?php echo do_shortcode('[oauth2_authorize_login_button]'); ?>
								</div>
								<div class="auth-button mr20">
									<?php echo do_shortcode('[oauth2_authorize_register_button]'); ?>
								</div>
							<?php else : ?>
								<div class="auth-button-container logout-btn">
									<div class="auth-txt mr20">
										<?php echo $_SESSION['oauth2_authorize_user_info']['email']; ?>
									</div>
									<div class="mr20">
										<?php echo do_shortcode('[oauth2_authorize_logout_button]'); ?>
									</div>
								</div>
							<?php endif; ?>

						</div>

					
						
						<?php
						/*	ワードプレスメニュー	
						<?php
						wp_nav_menu( array( 
							'menu' => 'menu1' 
						) );
						
						?>
						*/
						?>

						<div class="menu-menu1-container">
							<ul id="menu-menu1" class="menu">
								<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a href="<?php echo home_url(); ?>">ホーム</a></li>
								<li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a href="https://search.kikaicatalog.com/likes">お気に入り</a></li>
								<li id="menu-item-208" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208"><a href="<?php echo home_url(); ?>/about/">キカイカタログとは&nbsp;</a></li>
								<li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
							</ul>
						</div>

					</div><!-- //drawer -->

				
			<!-- end .row --></div>
		<!-- end .container --></div>


		<?php do_action( 'habakiri_after_header_content' ); ?>
	<!-- end #header --></header>


	<div id="contents">



		<?php do_action( 'habakiri_before_contents_content' ); ?>


<div id="backdrop" onclick="myfunc()"></div>