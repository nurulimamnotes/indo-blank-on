<?php
/**
 * Templates for Author Page.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/framework/960/fluid.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/author.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/indonesia.gif" />


</head>
<body>

<div style="margin-top:5px;border-bottom:solid 3px #ddd"></div>
	<ul id="menu">
<li><a href="<?php echo home_url()?>">Home<br /><span>back to homepage</span></a></li>
<li><a href="<?php echo get_option('blank_articleurl'); ?>">Article<br /><span>see all my notes</span></a></li>
<li><a href="<?php echo get_option('blank_galleryurl'); ?>">Gallery<br /><span>see all my gallery</span></a></li>
<li><a href="<?php echo get_option('blank_contacturl'); ?>">Contact<br /><span>have a problem .... ?</span></a></li>
	</ul>
<div style="clear:both;border-top:solid 3px #ddd"></div>

<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<header>
<a href="<?php echo $curauth->user_url; ?>" title="Visit <?php echo $curauth->nickname; ?> Official Site" target="_blank"><h1>Notes Of <?php echo $curauth->nickname; ?></h1></a>
</header>

<section class="semua_16">

<article class="kotak_16">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article class="column">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php echo limit_words(get_the_excerpt(), '20'); ?>

<div style="clear:both;margin-top:5px"></div>

<span class="meta" style="float:left"><?php comments_popup_link( 'No Comments', '1 Comment', '% Comments', 'comments-link', 'Comments Closed'); ?></span>
<span class="meta" style="float:right"><a href="<?php the_permalink(); ?>">Read Article</a></span>
</article>
<?php endwhile; else : ?><?php endif; ?>
</article>

<div style="clear:both;"></div>
<footer id="footer">
&#169; 2011 <a href="<?php echo home_url()?>" title="<?php bloginfo ('description')?>"><?php bloginfo("name") ?></a> | <a href="http://www.nurulimam.com/" title="Blank On WordPress Grid Framework Theme" target="_blank">Blank On WordPress Grid Framework Theme</a> Designed By <a href="http://www.nurulimam.com/" title="Nurul Imam Notes" target="_blank">Nurul Imam</a>
</footer>
</section>
</body>
</html>