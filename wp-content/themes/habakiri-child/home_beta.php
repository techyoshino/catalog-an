<?php

/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(top); ?>

	




<div class="container-fluid">
	<div class="row">
		<main id="main" role="main">

		<div class="container clearfix">

			<div class="item-bnr-ctr" randomdisplay="1">

		
				<div class="bunner_wrapper-1 item-bnr">
					<a href="https://chusho-gotcha.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog_ad_gotcha_03.jpg" alt=""></a>
					<div class="movie-container">
						<video class="movie" src="<?php echo get_template_directory_uri(); ?>/video/230421_gotcha_15fps_200px.mp4" autoplay loop muted playsinline></video>
					</div>
				</div>
			

		
				<div class="bunner_wrapper-2 item-bnr">
					<a href="https://www.techtrage.co.jp/service/dips/"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog_ad_dips_03.jpg" alt=""></a>
					<div class="movie-container">
						<video class="movie" src="<?php echo get_template_directory_uri(); ?>/video/230421_DIPS_15fps_200px.mp4" autoplay loop muted playsinline></video>
					</div>
				</div>
			

			

				<div class="bunner_wrapper-3 item-bnr">
					<a href="https://videfit.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog_ad_videfit_03.jpg" alt=""></a>
					<div class="movie-container">
						<video class="movie" src="<?php echo get_template_directory_uri(); ?>/video/230421_videfit_15fps_200px.mp4" autoplay loop muted playsinline></video>
					</div>
				</div>

		
			
		
				<div class="bunner_wrapper-4 item-bnr">
					<a href="https://www.techtrage.co.jp/service/usb-rs232cfornc/"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog_ad_rs232c_03.jpg" alt=""></a>
					<div class="movie-container">
						<video class="movie" src="<?php echo get_template_directory_uri(); ?>/video/230424_rs232c_15fps_200px.mp4" autoplay loop muted playsinline></video>
					</div>
				</div>

			</div>

</div>



		
<?php
/*
			
			<div class="swiper-container slider-top">
		
               
				

				<ul class="slider-2" id="js-slider-2">
				<?php $fields01 = CFS()->get( 'topslideimg',29 ); ?>
					<?php if ($fields01)://faq_loop が存在するとき ?>
					<?php foreach ( $fields01 as $field ):?>
						<li><a href="<?php echo $field['addslidelink']; ?>"><img src="<?php echo $field['addslideimg']; ?>"></a></li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			
				<div class="dots-2"></div>	
					
			
					<div style="background:#d72200;text-align: center;color: #fff;margin: 10px 0px;padding: 5px 0px;">β版公開中　2023年4月3日正式リリース</div>
					
			
		
			</div>
*/			
?>			
	
			

			<div class="page-contents top-topics">
				<div class="container clearfix">
					<div class="row_row">
						<h2>更新情報</h2>
							<div class="top-topics-ctr">
								<ul class="slider-3" id="js-slider-3">
									<?php
										$i = 0;
										$fields = $cfs->get('topics-loop',212); //〇〇に親ループ名
										foreach ((array)$fields as $field) :
										if($i >= 5){
											break;
										}
										$i++;
									?>

									<li>
										<div class="news_col">
											<div class="day"><?php echo $field['topics-day']; ?></div>
											<div class="text"><?php echo $field['topics-goods']; ?></div>
										</div>
									</li>

									<?php endforeach; ?>

								</ul>
							</div>

							<a href="<?php echo home_url(); ?>/topics/" class="btn">更新情報をすべてみる</a>

					</div>
				</div>
			</div>

		

			<div class="page-contents top-search">
				<div class="container">
					<div class="row_row">

				
					<h2>ジャンルから探す</h2>

				

							<?php
							// Exit if accessed directly
							if (!defined('ABSPATH')) {
								exit;
							}
					

							// call our API (make sure API is set up)
							$url = 'https://search-beta.kikaicatalog.com/api/wordpress/getCategories'; //just a test , we will implement new url for categories lvl 1 and nested lvl 2
							$products = wp_remote_get('https://search-beta.kikaicatalog.com/api/wordpress/getCategories');
							$url2 = 'https://search-beta.kikaicatalog.com/products?category=';
							$i = 0;
							$arr = json_decode($products['body']);
						

								echo '<section class="section-1-pc-Ctr">';

									echo '<section class="top-search-in section-1-pc-r">';


										echo'<h3 class="js-menu">'.$arr->categories[0]->name_ja.'<span>('.$arr->categories[0]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[0]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}
	
											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;
										}
										echo'</ul>';
										echo'</div>';


										echo'<h3 class="js-menu">'.$arr->categories[2]->name_ja.'<span>('.$arr->categories[2]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[2]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}

											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;
										}
										echo'</ul>';
										echo'</div>';

										echo'<h3 class="js-menu">'.$arr->categories[4]->name_ja.'<span>('.$arr->categories[4]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[4]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}

											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;

										}
										echo'</ul>';
										echo'</div>';

									
									


									echo '</section>';


									echo '<section class="top-search-in section-1-pc-l">';

										echo'<h3 class="js-menu">'.$arr->categories[1]->name_ja.'<span>('.$arr->categories[1]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[1]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}
											

											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;
										}
										echo'</ul>';
										echo'</div>';

										echo'<h3 class="js-menu">'.$arr->categories[3]->name_ja.'<span>('.$arr->categories[3]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[3]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}

											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;
										}
										echo'</ul>';
										echo'</div>';

										echo'<h3 class="js-menu">'.$arr->categories[5]->name_ja.'<span>('.$arr->categories[5]->product_count.')</span>'.'</h3>';	
										echo'<div class="machine-list">';
										echo'<ul class="machine--list">';
										foreach ($arr->categories[5]->lvl2 as $value) {

											if ( $value->product_count == 0 ) {
												continue;
											}

											echo  '<li>'.'<a href="'.$url2.''.$value->name_en.'">'.$value->name_ja.'<span>('. $value->product_count.')</span>'.'</a>'.'</li>' ;
										}
										echo'</ul>';
										echo'</div>';

										

										
									echo '</section>';


								echo '</section>';



							echo '<section class="section-1-sp-Ctr">';
							
								echo '<ul class="machine-list-Ctr">';

									$i = 0;
									foreach ($arr->categories as $value) {

										if($i >= 6){
											break;
										  }
										
										//   echo $visit_info['date'];

										

										echo '<li>';
										echo '<h3 id="test" class="js-menu">'.$value->name_ja.'<span>('.$value->product_count.')</span>'.'</h3>';
										echo '<div class="machine-list">';
										echo '<ul class="machine--list">';

											foreach ($value->lvl2 as $value2) {

												if ( $value2->product_count == 0 ) {
												continue;
												}
												echo  '<li>'.'<a href="'.$url2.''.$value2->name_en.'">'.$value2->name_ja.'<span>('. $value2->product_count.')</span>'.'</a>'.'</li>' ;
											}

										echo '</ul>';
										echo '</div>';

										echo '</li>';

										$i++;
										
									}

							echo'</ul>';

							echo '</section>';

						?>

						


						<section class="top-search-in section-2">

						<a href="https://search-beta.kikaicatalog.com/makers"> 
						<!-- <a　href="https://search.kikaicatalog.com/makers"> -->
							<h2>メーカーから探す(<?php echo $arr->total_maker; ?>)</h2>
							<p>メーカー名から目的の機械を検索</p>
						</a>	

						</section> <!--//top-search-in-->


						


						

			


					</div><!-- end .row -->
				</div><!-- end .container -->

			</div><!-- end .page-contents -->

			
			<?php
			/*
			<div class="page-contents top-topics">
				<div class="container clearfix">
					<div class="row_row">
						<h2>新着情報</h2>
							<ul>
								<?php
									$i = 0;
									$fields = $cfs->get('topics-loop',212); //〇〇に親ループ名
									foreach ((array)$fields as $field) :
									if($i >= 10){
										break;
									}
									$i++;
								?>

								<li>
									<div class="day"><?php echo $field['topics-day']; ?></div>
									<div class="text"><?php echo $field['topics-goods']; ?></div>
								</li>

								<?php endforeach; ?>

							</ul>

							<a href="<?php echo home_url(); ?>/topics/" class="btn">新着情報をすべて見る</a>

					</div>
				</div>
			</div>
			*/
			?>	

			<div class="page-contents listing-pr">
				<div class="container clearfix">
					<div class="row_row">

					<?php
					/*

					<h2>PR</h2>


					<?php
					
						<div class="bottom-carousel">

							<div class="container" style="overflow:hidden; padding:0; margin:0;">

								<div class="swiper-container slider-top-bottom">

									<ul class="swiper-wrapper">


									<?php
									$fields = CFS()->get('pr', 29);
									if ($fields) :
										foreach ($fields as $field) : 
									?>
										<li class="swiper-slide">
											<a href="<?php echo $field['pr-link']; ?>">
												
												<img src="<?php echo $field['primg']; ?>" alt="">
												<h4><?php echo $field['pr-company']; ?></h4>
												<p><?php echo $field['pr-txt']; ?></p>
											</a>
										</li>

										
										<?php endforeach; ?>
									<?php endif; ?>

								

									</ul>

									<!-- <div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div> -->
								</div>  

							</div>
						</div><!--//bottom-carousel-->


						<h2>よく見られている製品</h2>


						<div class="bottom-carousel">

							<div class="container" style="overflow:hidden; padding:0; margin:0;">

								<div class="swiper-container slider-top-bottom">

									<ul class="swiper-wrapper">

										<?php
										$fields = CFS()->get('recommend', 29);
										if ($fields) :
											foreach ($fields as $field) : 
										?>
											<li class="swiper-slide">
												<a href="<?php echo $field['recommend-link']; ?>">
													
													<img src="<?php echo $field['recommend-img']; ?>" alt="">
													<h4><?php echo $field['recommend-company']; ?></h4>
													<p><?php echo $field['recommend-txt']; ?></p>
												</a>
											</li>

											
											<?php endforeach; ?>
										<?php endif; ?>
	

									</ul>

									<!-- <div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div> -->
								</div>  

							</div>
						</div><!--//bottom-carousel-->
						*/
						?>

					
						
						<div class="new_exhibition">
						<?php
						$txt = get_field('exhibition-day');
						if (!empty($txt)) { ?>
					
						<h2>展示会情報</h2>
						<?php } ?>

						

						<ul>
						<?php
						$cat_posts = get_posts(array(
							'post_type' => 'post', // 投稿タイプ
							'category_name' => 'exhibition', // カテゴリをスラッグで指定する場合
							'posts_per_page' => 5, // 表示件数
							'orderby' => 'date', // 表示順の基準
							'order' => 'DESC' // 昇順・降順
						));
						global $post;
						if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
						
						<!-- ループはじめ -->
						<?php $value = get_post_meta($post->ID, 'exhibition-day', true); if(empty($value)):else:?>
						<li>
							<div class="new_blog_txt">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								
								<span><?php the_field('exhibition-day'); ?></span>
								<?php
								if ( mb_strlen( $post->post_content, 'UTF-8' ) > 30 ) {
								$content = mb_substr( strip_tags( $post->post_content ), 0, 30, 'UTF-8' );
								echo $content . '…';
								} else {
								echo strip_tags( $post->post_content );
								}
								?>
								</a>
							</div>	
						</li>
						<?php endif;?>
													
						<!-- ループおわり -->

						
						<?php endforeach; endif; wp_reset_postdata(); ?>

						</ul>




					<?php
					/*

						<ul>
							<?php $args = array(
									'posts_per_page'   => 5, //5件表示する
									'category_name'    => 'exhibition',  //カテゴリー「news」
									'orderby'          => 'date',  //日付順
									'order'            => 'DESC', //降順
									'meta_key' => 'show_index', //カスタムフィールドのキー
									'meta_value' => 'show', //カスタムフィールドの値
									'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
									);
							$my_query = new WP_Query($args);
							if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
							?>

							<?php $value = get_post_meta($post->ID, 'show_index', true); if(empty($value)):else:?>
							<li>
								<div class="new_blog_txt">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									
									<span><?php the_field('exhibition-day'); ?></span>
									<?php
									if ( mb_strlen( $post->post_content, 'UTF-8' ) > 30 ) {
									$content = mb_substr( strip_tags( $post->post_content ), 0, 30, 'UTF-8' );
									echo $content . '…';
									} else {
									echo strip_tags( $post->post_content );
									}
									?>
									</a>
								</div>	
							</li>
							<?php endif;?>
							
							<?php endwhile; endif; wp_reset_postdata(); ?>
						</ul>
					*/
					?>

						</div><!--//new_exhibition" -->

					
						

					
						<div class="new_blog">

							<h2>お知らせ</h2>

							<?php
								$information= get_posts( array(
								//ここで取得条件を指定する
								'posts_per_page' => 3
								));
								if( $information):
							?>
								<ul>
									<?php
									foreach( $information as $post ):
									setup_postdata( $post );
									?>
									<li>
										<?php
										/*
										<div class="new_blog_pic">
										<?php the_post_thumbnail('thumbnail'); ?>
										</div>
										*/
										?>

										<div class="new_blog_txt">
										<a href="<?php the_permalink(); ?>"> 	
										<span><?php the_time('Y.n.j'); ?></span>
										<span class="blog_cap">

											<?php
											if(mb_strlen($post->post_title)>16) {
											$title= mb_substr($post->post_title,0,16) ;
												echo $title . '...';
											} else {
												echo $post->post_title;
											}
											?>
										</span>
										
											<?php
												if ( mb_strlen( $post->post_content, 'UTF-8' ) > 30 ) {
												$content = mb_substr( strip_tags( $post->post_content ), 0, 30, 'UTF-8' );
												echo $content . '…';
												} else {
												echo strip_tags( $post->post_content );
												}
												?>
										</a>
										</div>	

									</li>
									<?php
									endforeach;
									wp_reset_postdata();
									?>
								</ul>
								<?php else: ?>
								<p>表示できる情報はありません。</p>
							<?php endif; ?>
						
						
						</div><!--//new_blog -->
					

				

					</div><!-- end .row -->
				</div><!-- end .container -->

			</div><!-- end .page-contents -->


			
		<!-- end #main --></main>
	<!-- end .row --></div>
<!-- end .container-fluid --></div>


<script>
	
/*	
var random = Math.floor(Math.random() * $('.item-bnr').length);
$('.item-bnr').hide().eq(random).css('display', 'flex');
*/

jQuery(function($) {
$.fn.extend({
	randomdisplay : function(num) {
		return this.each(function() {
			var chn = $(this).children().hide().length;
			for(var i = 0; i < num && i < chn; i++) {
				var r = parseInt(Math.random() * (chn - i)) + i;
			$(this).children().eq(r).css('display', 'flex').prependTo($(this));
			}
		});
	}
});
$(function(){
	$("[randomdisplay]").each(function() {
	$(this).randomdisplay($(this).attr("randomdisplay"));
	});
});
});


</script>

<?php get_footer(); ?>







