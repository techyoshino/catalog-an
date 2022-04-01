<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<?php
/*


	<div class="footer margin-top">
        <div class="container">
            <div class="row">
              

				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="footer-inner">
						<div class="footer-content">
							<ul class="footer-content-list">
								<!-- <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
								<li><a href="#"><i class="iconmoon-twitter"></i></a></li>
								<li><a href="#"><i class="iconmoon-flickr2"></i></a></li>
								<li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
								<li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
								<li><a href="#"><i class="iconmoon-linkedin2"></i></a></li> -->
								<li><a href="#">機械を探す</a></li>
								<li><a href="#">周辺機器を探す</a></li>
								<li><a href="#">メーカーを探す</a></li>
								<li><a href="#">詳細検索</a></li>
								<li><a href="#">お気に入り</a></li>
								<li><a href="#">比較リスト</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">お問い合わせ</a></li>


							</ul>
						</div>
					</div>
				</div>


            </div>
        </div>

        <div class="copyright-mark"> Copyright &copy; Techtrage Co.Ltd. All rights reserved</div>

    </div>

	*/
	?>

	<?php
	/*
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i><p>TOPへ</p></a>
	*/
	?>

	<?php
	/*

	<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<?php do_action( 'habakiri_before_footer_content' ); ?>
		
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				<!-- end .row --></div>
			<!-- end .container --></div>
		<!-- end .footer-widget-area --></div>
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social-nav' ) ) : ?>
		<div class="social-nav">
			<div class="container">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social-nav',
					'fallback_cb'    => '',
					'depth'          => 1
				) );
				?>
			<!-- end .container --></div>
		<!-- end .social-nav --></div>
		<?php endif; ?>
		
					
		<div class="copyright">
			<div class="container">
				<?php get_template_part( 'modules/copyright' ); ?>
			<!-- end .container --></div>
		<!-- end .copyright --></div>

		<?php do_action( 'habakiri_after_footer_content' ); ?>


	<!-- end #footer --></footer>

	*/
	?>

	<!-- end #contents --></div>
	<footer id="footer" class="footer">

	<div class="footer margin-top">
        <div class="container footer-navi">
            <div class="row">
              
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="footer-inner">
						<div class="footer-content">

						<?php
						/*
							<ul class="footer-content-list">
								<li><a href="#">周辺機器を探す</a></li>
								<li><a href="#">メーカーを探す</a></li>
								<li><a href="#">詳細検索</a></li>
								<li><a href="#">お気に入り</a></li>
								<li><a href="#">比較リスト</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">お問い合わせ</a></li>


							</ul>

						*/
						?>
						<?php
						// 引数に指定したメニューの位置にメニューが設定してある場合。引数にはregister_nav_menus()で登録したスラッグ名を指定
						if ( has_nav_menu( 'footer' )){
							// メニューの設定を配列で指定
							$args = array(
								// 表示させるメニューを、register_nav_menus()で登録したスラッグ名で指定。初期値はなし
								'theme_location' => 'footer',
								// ul要素を囲むかどうか。使えるタグはdiv、nav。囲まない場合はfalseを指定。初期値はdiv
								'container'      => false,
								// メニューのリンク前に表示するテキスト。初期値はなし
								'link_before'    => '<span>',
								// メニューのリンク後に表示するテキスト。初期値はなし
								'link_after'     => '</span>',
								// メニュー項目を囲むタグ。囲むタグをなしにする場合でも、パラメータを指定し %3$s の記述が必須
								'items_wrap'     =>'<ul class="footer-content-list">%3$s</ul>'
							);
							// メニューを表示
							wp_nav_menu( $args ); 
						}; 
						?>	
						</div>
					</div>
				</div>


            </div>
        </div>

        <div class="copyright-mark"> Copyright &copy; Techtrage Co.Ltd. All rights reserved</div>

    </div>
	

	<!-- end #footer --></footer>


<!-- end #container --></div>
<?php wp_footer(); ?>


</body>
</html>
