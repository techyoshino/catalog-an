<?php
/**
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 28, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	
	<div class="entry">

		<?php Habakiri::the_title(); ?>

		<?php the_post_thumbnail('full'); ?>

		<?php
		/*
		<?php get_template_part( 'modules/entry-meta' ); ?>
		*/
		?>
		<div class="entry-meta">
			<ul class="entry-meta__list">
				<li class="entry-meta__item published">
					<time><?php the_time("Y/m/d"); ?></time>
				</li>
				
				<li class="entry-meta__item categories">
					カテゴリー: <?php the_category(' '); ?></a>
				</li>			
			</ul>
		</div>

		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content entry-content">
			<?php the_content(); ?>
		<!-- end .entry__content --></div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
	<!-- end .entry --></div>

	<?php get_template_part( 'modules/link-pages' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>
	<?php

	/*
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
	*/
	?>
</article>
