<?php
/**
 * Templates for Image Galery.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/image.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/global.ico" />

</head>
<body>

<header>
<h1 style="text-align:center;"><?php the_title(); ?></h1>
</header>

<?php the_post(); ?>

<article style="text-align:center;">
<?php
$attachment_size = apply_filters( 'blank_attachment_size', 1200 );
echo wp_get_attachment_image( $post->ID, array( $attachment_size, $attachment_size ) );?>
<span class="kiri"><?php previous_image_link( false, __( '&larr;' , 'blank' ) ); ?></span>
<span class="kanan"><?php next_image_link( false, __( '&rarr;' , 'blank' ) ); ?></span>
</article>
<a class='home' href='<?php echo home_url()?>'>Back To Home</a>
<a class='article' href='<?php echo get_option('blank_articleurl'); ?>'>Go To Archives</a>
<?php get_footer(); ?>