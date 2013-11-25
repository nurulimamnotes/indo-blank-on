<?php
/**
 * Templates for Error Page.
 * For more help, go to : http://www.nurulimam.com/
 */
get_header(); ?>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/error.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/search.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/error.css" />

</head>
<body>

<div style="margin-left:50%;margin-top:100px;">
<div style="text-align:center;">
<p class="terbalik" style="color:#d00;text-shadow:2px 2px 5px #ccc;font-family:monospace;font-size:10em;">4<span style="color:#d00;text-shadow:1px 1px 15px #d00;">0</span>4</p>
<?php get_search_form(); ?>
</div>
</div>

<a class='home' href='/'>Back To Home</a>
<a class='article' href='<?php echo get_option('blank_articleurl'); ?>'>Go To Archives</a>

</body>
</html>