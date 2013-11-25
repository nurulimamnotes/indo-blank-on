<?php
/**
 * Templates for Search Results Page.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/global.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/results.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/font/lobster.css" />

</head>
<body>
<header>
<h1><?php printf( __( 'Search Results : %s', 'blank' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header>

<article class="column" style="margin-left:auto;margin-right:auto">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="box">
<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p style="margin-left:10px"><?php echo limit_words(get_the_excerpt(), '30'); ?></p>
</article>
<?php endwhile; ?>
<?php else : ?>
<h1><?php printf( __( '%s Not Found', 'blank' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<?php get_search_form(); ?>
<?php endif; ?>
</article>

</body>
</html>