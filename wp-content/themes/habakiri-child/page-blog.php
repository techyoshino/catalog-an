<?php get_header(blog); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">

				<?php
// 取得する内容を配列に記載します（不要箇所は省略可）
$args = array(
              'posts_per_page'   => 5, // 読み込みたい記事数（全件取得時は-1）
              'category'         => 1, // 読み込みたいカテゴリID（複数の場合は '1,2'）
              'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
              'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
              'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切り）
);

//配列で指定した内容で、記事情報を取得
$the_query = new WP_Query( $args );

// 取得した記事情報の表示
if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示

// ↓ ループ開始 ↓
while ( $the_query->have_posts() ):
              $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
?>



<article class="article article--archive">
    <div class="entry">
        <div class="entries entries--archive">

            <article class="article article--summary post-313 post type-post status-publish format-standard hentry category-exhibition">
                <div class="entry--has_media entry">
                    <div class="entry--has_media__inner">
                        <div class="entry--has_media__media">
                         
                            <!-- end .entry--has_media__media -->
                        </div>
                        <div class="entry--has_media__body">
                            <h1 class="entry__title entry-title h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <div class="entry__summary">
                                <p>
									<?php
									if(mb_strlen($post->post_content, 'UTF-8')>200){
										$content= mb_substr(strip_tags($post->post_content), 0, 118, 'UTF-8');
										echo $content.'[…]';
									}else{
										echo strip_tags($post->post_content);
									}
									?>
								</p>
                                <!-- end .entry__summary -->
                            </div>
                            <div class="entry-meta">
                                <ul class="entry-meta__list">
                                    <li class="entry-meta__item published"><time datetime=""><span style="display:none;">公開日: </span><?php the_date(); ?></time></li>
                                    <li class="entry-meta__item categories">カテゴリー: <?php the_category(' ');?></li>
                                </ul>
                                <!-- end .entry-meta -->
                            </div>
                            <!-- end .entry--has_media__body -->
                        </div>
                        <!-- end .entry--has_media__inner -->
                    </div>
                    <!-- end .entry--has_media -->
                </div>
            </article>

            <!-- end .entries -->
        </div>
        <!-- end .entry -->
    </div>
</article>


         
              ～　ループ内で表示させたい記述を書く ～

<?php
endwhile;
// ↑ ループ終了 ↑

else: // 記事情報がなかったら
?>

              ～　記事がない場合の記述 ～

<?php
endif;

// 一覧情報取得に利用したループをリセットする
wp_reset_postdata();
?>

				<!-- end #main --></main>
			<!-- end .col-md-9 --></div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			<!-- end .col-md-3 --></div>
		<!-- end .row --></div>
	<!-- end .container --></div>
		

<!-- end .sub-page-contents --></div>



<?php get_footer(); ?>
