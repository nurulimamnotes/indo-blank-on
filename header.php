<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title><?php if (is_home()) { echo bloginfo('name');}
elseif (is_404()) { echo '404 Not Found';}
elseif (is_category()) { echo 'Category : '; wp_title('');}
elseif (is_search()) { echo 'Search Results';}
elseif ( is_day() || is_month() || is_year() ) { echo 'Archives'; wp_title('');}
else { echo wp_title('');} ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/framework/reset.css" />
<?php
if (is_single()) {
if ($insert_htmlcssjs = get_post_meta($post->ID, 'insert_htmlcssjs', true)) {
echo $insert_htmlcssjs;}}
?>
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->