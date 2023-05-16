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
<?php get_header(); ?>



	<div class="container">

	<?php Habakiri::the_title();?>

			<main id="main" role="main">

				<div class="entry__content <?php echo esc_attr($post->post_name);?>">

						<ul class="list-group">
							<?php
								$fields = $cfs->get('topics-loop'); 
								foreach ((array)$fields as $field) :
							?>
						
								<li>
									<div class="day"><?php echo $field['topics-day']; ?></div>
									<div class="text"><?php echo $field['topics-goods']; ?></div>
								</li>
							<?php endforeach; ?>

						</ul>

					<?php the_content(); ?>
				<!-- end .entry__content --></div>
				
				
			<!-- end #main --></main>

	<!-- end .container --></div>








<?php get_footer(); ?>
