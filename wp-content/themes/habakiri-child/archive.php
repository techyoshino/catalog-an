<?php get_header(blog); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">
	<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>
<!-- end .sub-page-contents --></div>

<?php get_footer(); ?>
