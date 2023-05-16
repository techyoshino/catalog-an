<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>



<div class="sub-page-contents">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<main id="main" role="main">
	
			<article <?php post_class( array( 'article', 'article--page' ) ); ?>>
				
				<div class="entry notfound">

					<div class="notfound_img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="">
					</div>

					<div class="notfound_botoom">
						<h2>ご指定のページが見つかりませんでした。</h2>
						<p>
							URLが間違っているか、ページが削除された可能性があります。<br />
							恐れ入りますが、キカイカタログのトップよりお探しいただきますようお願いいたします。
						</p>
						
						<a href="/">キカイカタログ トップへ</a>

					</div>	

			
				<!-- end .entry --></div>


			</article>


				
			<!-- end #main --></main>
		<!-- end .col-md-12 --></div>
	<!-- end .row --></div>
<!-- end .container --></div>


<!-- end .sub-page-contents --></div>

<?php get_footer(); ?>
</div>
