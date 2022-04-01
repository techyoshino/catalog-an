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

						<section class="top-search-in section-1">


							<a href="https://search.kikaicatalog.com/products">
								<h3>機械・周辺機器を探す</h3>
								<p>マシニングセンタや旋盤、各種ツーリング、ソフトウェアなどを検索</p>

								<ul>

									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="79.098" height="75.66" viewBox="0 0 79.098 75.66">
											<g id="グループ_1012" data-name="グループ 1012" transform="translate(0.766 0.766)">
												<rect id="長方形_1281" data-name="長方形 1281" width="17.421" height="16.104" transform="translate(55.465)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
												<rect id="長方形_1282" data-name="長方形 1282" width="51.326" height="12.542" transform="translate(9.924 3.562)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
												<rect id="長方形_1283" data-name="長方形 1283" width="35.175" height="46.932" transform="translate(23.963 16.104)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
												<rect id="長方形_1284" data-name="長方形 1284" width="35.175" height="37.224" transform="translate(23.963 20.958)" fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="0.51"/>
												<rect id="長方形_1285" data-name="長方形 1285" width="6.025" height="36.464" transform="translate(23.963 21.231)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1286" data-name="長方形 1286" width="21.839" height="46.932" transform="translate(2.124 16.104)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
												<rect id="長方形_1287" data-name="長方形 1287" width="15.861" height="46.932" transform="translate(59.138 16.104)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
												<rect id="長方形_1288" data-name="長方形 1288" width="1.908" height="5.888" transform="translate(26.091 37.685)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1289" data-name="長方形 1289" width="23.573" height="4.497" transform="translate(32.782 53.199)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1290" data-name="長方形 1290" width="3.607" height="3.607" transform="translate(35.981 49.592)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1291" data-name="長方形 1291" width="3.607" height="3.607" transform="translate(49.549 49.592)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<path id="パス_519" data-name="パス 519" d="M447.8,1040.752h16.473l2.759-12.966H445.038Z" transform="translate(-411.193 -1006.555)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1292" data-name="長方形 1292" width="12.214" height="3.607" transform="translate(50.949 37.804) rotate(180)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<rect id="長方形_1293" data-name="長方形 1293" width="4.323" height="3.607" transform="translate(47.003 41.411) rotate(180)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1"/>
												<path id="パス_520" data-name="パス 520" d="M455.03,1050.849l1,.723,1-.723v-2.884H455.03Z" transform="translate(-411.193 -1006.555)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="0.5"/>
												<rect id="長方形_1294" data-name="長方形 1294" width="77.567" height="11.094" transform="translate(0 63.035)" fill="#595757" stroke="#fff" stroke-linejoin="round" stroke-width="1.531"/>
											</g>
										</svg>
									</li>

									<li>

										<svg xmlns="http://www.w3.org/2000/svg" width="66.964" height="80.703" viewBox="0 0 66.964 80.703">
											<g id="グループ_1170" data-name="グループ 1170" transform="translate(-1063.29 -750.29)">
												<rect id="長方形_32" data-name="長方形 32" width="8.773" height="50.6" transform="translate(1065.146 754.27)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_6" data-name="パス 6" d="M770.085,1018.471l-10.874,7.742v-8.973l10.874-7.742Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_8" data-name="パス 8" d="M759.211,1005.428v7.051l10.874-7.742v-2.068h-8.891Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_10" data-name="パス 10" d="M770.085,1032.645l-10.874,7.742v-8.973l10.874-7.742Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_12" data-name="パス 12" d="M770.085,1046.82l-10.874,7.742v-8.973l10.874-7.742Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_16" data-name="パス 16" d="M787.314,1054.562h-8.773v-48.6l4.453-5.275,4.321,3.27Z" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<rect id="長方形_33" data-name="長方形 33" width="22.398" height="41.794" transform="translate(1103.805 763.076)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_23" data-name="パス 23" d="M824.1,1080.685v-26.123H796.334v26.123" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.5"/>
												<rect id="長方形_34" data-name="長方形 34" width="25.154" height="6.012" transform="translate(1127.581 767.796) rotate(180)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_24" data-name="パス 24" d="M796.994,1013.742h26.443l1.319-12.232h-29.08Z" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_25" data-name="パス 25" d="M799.312,1001.51l.694,6.663a3.3,3.3,0,0,0,3.278,2.955h0a3.3,3.3,0,0,0,3.279-3.638l-.624-5.98Z" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_26" data-name="パス 26" d="M814.145,1001.51l.694,6.663a3.3,3.3,0,0,0,3.279,2.955h0a3.3,3.3,0,0,0,3.278-3.638l-.624-5.98Z" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_27" data-name="パス 27" d="M802.648,1001.51l.6,5.656h-3.336l-.6-5.656Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_28" data-name="パス 28" d="M817.481,1001.51l.6,5.656h-3.336l-.6-5.656Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<circle id="楕円形_1" data-name="楕円形 1" cx="0.472" cy="0.472" r="0.472" transform="translate(1105.595 753.94)" fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="1.42"/>
												<circle id="楕円形_2" data-name="楕円形 2" cx="0.472" cy="0.472" r="0.472" transform="translate(1120.429 753.94)" fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_556" data-name="パス 556" d="M770.18,1080.685v-26.123H759.306v26.123" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-width="1.5"/>
												<path id="パス_557" data-name="パス 557" d="M788.364,1080.685v-26.123H777.49v26.123" transform="translate(304.789 -249.691)" fill="#fff" stroke="#595757" stroke-width="1.5"/>
												<path id="パス_558" data-name="パス 558" d="M788.364,1004.091h-.654l-10.22,20.191v9.491l10.874-21.484Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_559" data-name="パス 559" d="M782.993,1000.691l-5.5,3v7.778h.865Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
												<path id="パス_560" data-name="パス 560" d="M777.49,1049.262v9.491l10.874-21.484v-9.49Z" transform="translate(304.789 -249.691)" fill="#595757" stroke="#595757" stroke-linejoin="round" stroke-width="1.42"/>
											</g>
										</svg>

									</li>

								</ul>

							</a>

						</section> <!--//top-search-in-->

						<section class="top-search-in section-2">

						<a href="https://search.kikaicatalog.com/makers">
							<h3>メーカーから探す</h3>
							<p>メーカー名から目的の機械を検索</p>
						</a>	

						</section> <!--//top-search-in-->


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

					<h2>PR</h2>

					<?php
						/*
					
					<ul class="">
						<li class="slider-top-bottom">
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li class="slider-top-bottom">
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li class="slider-top-bottom">
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li class="slider-top-bottom">
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li class="slider-top-bottom">
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

					

						<li>
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li>
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li>
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						<li>
							<div class="listing-pr-detail">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/slider/image1.png" alt="">
									<h4>ファナック株式会社</h4>
									<p>ROBODRILL α-D21LiB5 ADV</p>
								</a>
							</div>
						</li>

						


					</ul>

					*/
					?>
					
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

				

					</div><!-- end .row -->
				</div><!-- end .container -->

			</div><!-- end .page-contents -->


			
		<!-- end #main --></main>
	<!-- end .row --></div>
<!-- end .container-fluid --></div>




<?php get_footer(); ?>


