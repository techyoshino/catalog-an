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

<?php
/*

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>
<!-- end .sub-page-contents --></div>

*/
?>

<div class="container-fluid">
	<div class="row">
		<main id="main" role="main">
			
			<div class="swiper-container slider-top">
                <div class="swiper-wrapper">

				<?php
				/*

                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt=""></div>
					<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image2.png" alt=""></div>
					<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image3.png" alt=""></div>
					<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt=""></div>
					<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image2.png" alt=""></div>
					<div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/image3.png" alt=""></div>
				*/
				?>	

					<?php
					$fields = CFS()->get('topslideimg', 29);
					if ($fields) :
						foreach ($fields as $field) : 
					?>
						 <div class="swiper-slide">
							<img src="<?php echo $field['addslideimg']; ?>">
						</div>
						<?php endforeach; ?>
					<?php endif; ?>
					
			
            	</div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div> 


			<div class="page-contents top-search">
				<div class="container">
					<div class="row_row">

				
					<h2>ジャンルから探す</h2>

						<section class="section-1-pc-Ctr">
				

                    		<section class="top-search-in section-1-pc-r">
						
					
						        <h3 class="js-menu2">工作機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=lathe">旋盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=machining-center">マシニングセンタ</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_milling-machine">NCフライス盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_grinding-machine">NC研削盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_middle_milling-machine">NC中繰りフライス盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gear-processing_machine">歯車加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric-discharge_machines">放電加工機類</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_machine-tool">その他工作機械</a></li>
						            </ul>
						        </div>
						   
						        <h3 class="js-menu2">プレス機</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric_press">電動プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric_gate-type_press">電動門型プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=hydraulic_press">油圧プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=forged_presses">鍛造プレス類</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=air_press">エアプレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_press_machine">その他プレス機</a></li>
						            </ul>
						        </div>
						   
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						  
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						  
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						

							</section>


							<section class="top-search-in section-1-pc-l">
						
					
						        <h3 class="js-menu2">工作機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=lathe">旋盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=machining-center">マシニングセンタ</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_milling-machine">NCフライス盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_grinding-machine">NC研削盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=nc_middle_milling-machine">NC中繰りフライス盤</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gear-processing_machine">歯車加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric-discharge_machines">放電加工機類</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_machine-tool">その他工作機械</a></li>
						            </ul>
						        </div>
						   
						        <h3 class="js-menu2">プレス機</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric_press">電動プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=electric_gate-type_press">電動門型プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=hydraulic_press">油圧プレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=forged_presses">鍛造プレス類</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=air_press">エアプレス</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_press_machine">その他プレス機</a></li>
						            </ul>
						        </div>
						   
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						  
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						  
						        <h3 class="js-menu2">板金機械</h3>
						        <div class="machine-list2">
						            <ul class="machine--list2">
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=laser-processing_machine">レーザー加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=plasma-processing_machine">プラズマ加工機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=gas-cutting_machine">ガス切断機</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=water_jet">ウオータージェット</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=press_brake">ブレスブレーキ（ベンダ）</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=shirring">シャーリング</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=bending_roll">ベンディングロール</a></li>
						                <li><a href="https://search.kikaicatalog.com/products?type=1&amp;category=other_sheet-metal_machine">その他板金機械</a></li>
						            </ul>
						        </div>
						

							</section>

						</section>

						<section class="section-1-sp-Ctr">

							<?php
							// Exit if accessed directly
							if (!defined('ABSPATH')) {
								exit;
							}

							// call our API (make sure API is set up)
							$url = 'http://search.kikaicatalog.com/api/wordpress/getCategories'; //just a test , we will implement new url for categories lvl 1 and nested lvl 2
							$products = wp_remote_get('http://search.kikaicatalog.com/api/wordpress/getCategories');
							$url2 = 'https://search.kikaicatalog.com/products?type=1&category=';
							$i = 0;
							

							$arr = json_decode($products['body']);
							
							echo '<ul class="machine-list-Ctr">';

							foreach ($arr->categories as $value) {
								

								echo '<li>';
							//	echo '<h3 class="js-menu">'.'<a href="'.$url2.''.$value->name_ja.'">'.$value->name_ja.'</a>'.'</h3>';
								echo '<h3 id="test" class="js-menu2">'.$value->name_ja.'</h3>';
							//	echo $tt.$i++;
								echo '<div class="machine-list2">';
								echo '<ul class="machine--list2">';

									foreach ($value->lvl2 as $value2) {
									echo  '<li>'.'<a href="'.$url2.''.$value2->name_en.'">'.$value2->name_ja.'</a>'.'</li>' ;
									}

								echo '</ul>';
								echo '</div>';

								echo '</li>';
								
							}

							echo '</ul>';


							?>

						</section>


						<section class="top-search-in section-2">

						<a href="https://search.kikaicatalog.com/makers">
							<h3>メーカーから探す</h3>
							<p>メーカー名から目的の機械を検索</p>
						</a>	

						</section> <!--//top-search-in-->

			


						<?php
						/*


						<section class="top-search-key section-3">

					
							<h2>キーワードから探す</h2>
							<p>
								
							<form method="get" action="https://search.kikaicatalog.com/products" class="search_container">
								<input type="text" placeholder="検索キーワードを入力してください" name="keyword">

								<!-- <input type="submit" value="検索" class="fas"> -->

								<button type="submit" class="button1">
									検索<i class="fas fa-search"></i>
								</button>


							</form>
							</p>
							

						</section> <!--//top-search-in-->
						*/
						?>





						<!-- <section class="top-search-tag section-4">

					
							<h3>人気のカテゴリー</h3>
							
							<ul>
								<li><a href="#">テスト</a></li>
								<li><a href="#">テストテスト</a></li>	
								<li><a href="#">テスト</a></li>	
								<li><a href="#">テスト</a></li>	
								<li><a href="#">テストテスト</a></li>	
								<li><a href="#">テスト</a></li>			
							</ul>
							

						</section> //top-search-in -->


					</div><!-- end .row -->
				</div><!-- end .container -->

			</div><!-- end .page-contents -->

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

						

						<?php


						/*

						<div class="new_blog">

						<h2>ブログの新着情報</h2>

							<?php
								$information= get_posts( array(
								//ここで取得条件を指定する
								'posts_per_page' => 4
								));
								if( $information):
							?>
								<ul>
									<?php
									foreach( $information as $post ):
									setup_postdata( $post );
									?>
									<li>
										<div class="new_blog_pic">
										<?php the_post_thumbnail('thumbnail'); ?>
										</div>

										<div class="new_blog_txt">
										<span><?php the_time('Y年n月j日'); ?></span>
										<span class="blog_cap"><?php the_title(); ?></span>
										<a href="<?php the_permalink(); ?>"> 
											<?php
												if ( mb_strlen( $post->post_content, 'UTF-8' ) > 80 ) {
												$content = mb_substr( strip_tags( $post->post_content ), 0, 80, 'UTF-8' );
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
						*/
						?>

				

					</div><!-- end .row -->
				</div><!-- end .container -->

			</div><!-- end .page-contents -->


			
		<!-- end #main --></main>
	<!-- end .row --></div>
<!-- end .container-fluid --></div>




<?php get_footer(); ?>


