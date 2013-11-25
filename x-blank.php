<?php
/*
Style : Featured Blank Post
*/
get_header(); ?>
</head><body>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(''); ?>
<?php endwhile; else : ?><?php endif; ?>
</body></html>