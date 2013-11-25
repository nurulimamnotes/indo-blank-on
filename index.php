<?php
/**
 * Templates for Homepage.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/framework/960/fluid.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/home.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/font/judul.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/home.gif" />

</head>
<body <?php body_class(); ?>>


	<ul id="menu">
<li><a href="<?php echo home_url()?>">Home<br /><span>homepage</span></a></li>
<li><a href="<?php echo get_option('blank_articleurl'); ?>">Article<br /><span>my notes</span></a></li>
<li><a href="<?php echo get_option('blank_galleryurl'); ?>">Gallery<br /><span>my gallery</span></a></li>
<li><a href="<?php echo get_option('blank_abouturl'); ?>">About<br /><span>about me</span></a></li>
<li><a href="<?php echo get_option('blank_contacturl'); ?>">Contact<br /><span>contact me</span></a></li>
	</ul>
<section style="margin-top:10px;clear:both"></section>


<section class="semua_12">
<header class="kotak_5">
<h1><?php bloginfo( 'name' ); ?></h1>
</header>

<p class="kotak_6" style="margin-right:5%;color:#5CE0E0;font-family: Judul;font-size:120%;font-style:oblique;">
<?php bloginfo( 'description' ); ?>
</p>

<section class="bersih"></section>

<aside class="kotak_4">
<h4>My Last Tweets</h4>
<aside id="tweets">
<ul id="twitter">
<li></li>
</ul>
</aside>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/twitter.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/nurulimamnotes.json?callback=twitterCallback2&amp;count=4"></script>
</aside>

<article class="kotak_7" style="margin-left:5%;">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php endwhile; else : ?><?php endif; ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Network') ) : ?>

<!-- Replace this social widget on widgets menu -->
<section style="margin-left:70%;">
<a href="<?php echo get_option('blank_rssurl'); ?>" class="social" id="socialRss" title="Subscribe Via RSS" rel="nofollow" target="_blank">Subscribe Via RSS</a>
<a href="<?php echo get_option('blank_twitterurl'); ?>" class="social" id="socialTwitter" title="Follow Me On Twitter" rel="nofollow" target="_blank">Follow Me On Twitter</a>
<a href="mailto:<?php echo get_option('blank_mailurl'); ?>" class="social" id="socialGmail" title="Send Me E-Mail" rel="nofollow" target="_blank">Nurul Imam Email</a>
<a href="<?php echo get_option('blank_facebookurl'); ?>" class="social" id="socialFacebook" title="Nurul Imam Facebook" rel="nofollow" target="_blank">Nurul Imam Facebook</a>
<a href="<?php echo get_option('blank_linkedinurl'); ?>" class="social" id="socialLinkedIn" title="Nurul Imam Linked In" rel="nofollow" target="_blank">Nurul Imam Linked In</a>
</section>

<?php endif; ?>
</article>

<section class="bersih"></section>

<?php get_footer(); ?>