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
<div class="container">
	<div class="row">
		<div class="col-md-9 col-md-push-3">
			<main id="main" role="main">

				<?php get_template_part( 'modules/breadcrumbs' ); ?>


				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<?php the_post_thumbnail('thumbnail'); ?>
				<?php endwhile; endif; ?>


				<?php
				if ( is_404() ) {
					get_template_part( 'content', 'none' );
				} else {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'content', 'single' );
					}
				}
				?>
				
			<!-- end #main --></main>
		<!-- end .col-md-9 --></div>
		<div class="col-md-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		<!-- end .col-md-3 --></div>
	<!-- end .row --></div>
<!-- end .container --></div>
