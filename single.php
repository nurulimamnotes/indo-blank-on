<?php
/**
 * Templates for Single Post.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/global.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/font/judul.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/framework/960/fluid.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/single.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/comment.css" />

<script type='text/javascript'  style="display:none">addComment={moveForm:function(d,f,i,c){var m=this,a,h=m.I(d),b=m.I(i),l=m.I("cancel-comment-reply-link"),j=m.I("comment_parent"),k=m.I("comment_post_ID");if(!h||!b||!l||!j){return}m.respondId=i;c=c||false;if(!m.I("wp-temp-form-div")){a=document.createElement("div");a.id="wp-temp-form-div";a.style.display="none";b.parentNode.insertBefore(a,b)}h.parentNode.insertBefore(b,h.nextSibling);if(k&&c){k.value=c}j.value=f;l.style.display="";l.onclick=function(){var n=addComment,e=n.I("wp-temp-form-div"),o=n.I(n.respondId);if(!e||!o){return}n.I("comment_parent").value="0";e.parentNode.insertBefore(o,e);e.parentNode.removeChild(e);this.style.display="none";this.onclick=null;return false};try{m.I("comment").focus()}catch(g){}return false},I:function(a){return document.getElementById(a)}};</script>

</head>
<body>

	<ul id="menu">
<li><a href="<?php echo home_url()?>">Home<br /><span>back to homepage</span></a></li>
<li><a href="<?php echo get_option('blank_articleurl'); ?>">Article<br /><span>see all my notes</span></a></li>
<li><a href="<?php echo get_option('blank_galleryurl'); ?>">Gallery<br /><span>see all my gallery</span></a></li>
<li><a href="<?php echo get_option('blank_abouturl'); ?>">About<br /><span>about me</span></a></li>
<li><a href="<?php echo get_option('blank_contacturl'); ?>">Contact<br /><span>have a problem .... ?</span></a></li>
	</ul>

<div style="border-bottom:3px solid #ddd; margin-top:10px;clear:both"></div>

<article class="semua_16">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<article class="kotak_9" style="margin-left:4%">
<div id="pagination">
<?php previous_post_link('%link', '&larr;', TRUE); ?>
<?php next_post_link('%link', '&rarr;', TRUE); ?>
</div>
<p style="padding-bottom:5px">Created By : <?php the_author_posts_link(); ?><br /><?php the_tags(); ?></p>
<div style="border-bottom:3px solid #ddd; clear:both"></div>
<?php the_content(''); ?>
<div style="clear:both"></div>
<?php comments_template(); ?>
</article>

<aside class="kotak_6">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar Single') ) : ?>
<!-- Go to Widgets, select Right Sidebar Single and change this widget -->
<h3 style="border-bottom:3px solid #ddd;margin-top:15px;">Recent Update Article</h3>
<ul>
<?php
$artikel = array( 'numberposts' => '5' );
$catatan_terbaru = wp_get_recent_posts( $artikel );
foreach( $catatan_terbaru as $tulisan ){
echo '<li><a href="' . get_permalink($tulisan["ID"]) . '" title="Lihat Catatan Tentang '.$tulisan["post_title"].'" >' .   $tulisan["post_title"].'</a> </li> ';}
?>
</ul>
<?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar Single 2') ) : ?>
<!-- Go to Widgets, select Right Sidebar Single and change this widget -->
<h3 style="border-bottom:3px solid #ddd;margin-top:8px;">My Blogrolls</h3>
<ul>
<?php wp_list_authors('exclude_admin=0'); ?>
<li><a href="http://www.nurulimam.com/" title="Nurul Imam" >Nurul Imam</a></li>
</ul>
<?php endif; ?>

</aside>

</article>
<?php endwhile; else: ?>
<?php _e('Sorry, There is no article', 'blank'); ?>
<?php endif; ?>

<div style="clear:both"></div>
<?php get_footer(); ?>