<?php
/**
 * Templates for Page.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/monkey.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/font/lobster.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript">
$(function() {
  $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);
$('#navigation > li').hover(
   function () {
$('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
},
   function () {
$('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
    }
  );
});
</script>

</head>
<body>

<article class="box" style="margin-right:auto;margin-left:auto">
<?php while(have_posts()) : the_post(); ?>
<h1 style="text-align:center;"><?php the_title(); ?></h1>
<div class="stars"></div>
<?php the_content(); ?>
<?php endwhile; ?>
</article>

        <ul id="navigation">
            <li class="home"><a href="<?php echo home_url()?>"></a></li>
            <li class="photos"><a href="<?php echo get_option('blank_galleryurl'); ?>"></a></li>
            <li class="about"><a href="<?php echo get_option('blank_abouturl'); ?>"></a></li>
            <li class="contact"><a href="<?php echo get_option('blank_contacturl'); ?>"></a></li>
            <li class="rssfeed"><a href="<?php echo get_option('blank_rssurl'); ?>"></a></li>
        </ul>

<div style="clear:both"></div>
<?php get_footer(); ?>