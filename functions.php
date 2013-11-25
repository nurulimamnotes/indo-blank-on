<?php
function themeoptions_admin_menu()
{
add_theme_page("Blank On Options", "Blank On Options", 'edit_themes', basename(__FILE__), 'themeoptions_page');
}
function themeoptions_page()
{
if ( $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }
?>
<div class="wrap">
<div id="icon-themes" class="icon32"><br /></div>
<h2 style="text-shadow:1px 1px 1px #ccc">Blank - On Menu Management</h2>
<form method="POST" action="">
<input type="hidden" name="update_themeoptions" value="true" />
<h3 style="text-shadow:3px 3px 1px #ccc;font-size:2em;text-align:center">Setting URL Menu Navigation</h3>
<table width="100%" border="0">
<tr>
	<td valign="top" width="33%">
<p><label for="articleurl">Archive</label><br /><input type="text" name="articleurl" id="articleurl" size="32" value="<?php echo get_option('blank_articleurl'); ?>"/></p><p><small><strong>Example : </strong><em>http://www.nurulimam.com/daftar-semua-artikel-nurul-imam-notes-html/</em></small></p>
	</td>
	<td valign="top" width="33%">
<p><label for="galleryurl">Gallery</label><br /><input type="text" name="galleryurl" id="galleryurl" size="32" value="<?php echo get_option('blank_galleryurl'); ?>"/></p>
<p><small><strong>Example : </strong><em>http://www.nurulimam.com/portfolio</em></small></p>
	</td>
	<td valign="top" width="33%">
<p><label for="abouturl">About</label><br /><input type="text" name="abouturl" id="abouturl" size="32" value="<?php echo get_option('blank_abouturl'); ?>"/></p><p><small><strong>Example : </strong><em>http://www.nurulimam.com/about-nurul-imam-notes/</em></small></p>
	</td>
	<td valign="top" width="33%">
<p><label for="twturl">Contact</label><br /><input type="text" name="contacturl" id="contacturl" size="32" value="<?php echo get_option('blank_contacturl'); ?>"/></p><p><small><strong>Example : </strong><em>http://www.nurulimam.com/kontak-kami-jika-ada-masalah/</em></small></p>
	</td>
</tr>
<tr>
	<td valign="top" width="33%">
<p><label for="rssurl">RSS Feed</label><br /><input type="text" name="rssurl" id="rssurl" size="32" value="<?php echo get_option('blank_rssurl'); ?>"/></p><p><small><strong>Example : </strong><em>http://www.nurulimam.com/feed/</em></small></p>
	</td>
	<td valign="top" width="33%">
<p><label for="twitterurl">Twitter</label><br /><input type="text" name="twitterurl" id="twitterurl" size="32" value="<?php echo get_option('blank_twitterurl'); ?>"/></p>
<p><small><strong>Example : </strong><em>http://twitter.com/nurulimamnotes</em></small></p>
	</td>
	<td valign="top" width="33%">
<p><label for="mailurl">E-Mail</label><br /><input type="text" name="mailurl" id="mailurl" size="32" value="<?php echo get_option('blank_mailurl'); ?>"/></p><p><small><strong>Example : </strong><em>mnurulimam@gmail.com</em></small></p>
	</td>
</tr>
<tr>
	<td valign="top" width="50%">
<p><label for="facebookurl">Facebook</label><br /><input type="text" name="facebookurl" id="facebookurl" size="32" value="<?php echo get_option('blank_facebookurl'); ?>"/></p><p><small><strong>Example : </strong><em>http://www.facebook.com/nurulimamnotes</em></small></p>
	</td>
	<td valign="top" width="50%">
<p><label for="linkedinurl">Linked In</label><br /><input type="text" name="linkedinurl" id="linkedinurl" size="32" value="<?php echo get_option('blank_linkedinurl'); ?>"/></p>
<p><small><strong>Example : </strong><em>http://linkedin.com/in/nurulimam</em></small></p>
	</td>
</tr>
</table>
<p><input type="submit" name="search" value="Save" class="button button-primary" /></p></form></div>

	<?php
}
add_action('admin_menu', 'themeoptions_admin_menu');
function themeoptions_update()
{
	update_option('blank_articleurl', 	$_POST['articleurl']);
	update_option('blank_galleryurl', 	$_POST['galleryurl']);
	update_option('blank_abouturl', 	$_POST['abouturl']);
	update_option('blank_contacturl', 	$_POST['contacturl']);
	update_option('blank_rssurl', 	        $_POST['rssurl']);
	update_option('blank_twitterurl', 	$_POST['twitterurl']);
	update_option('blank_mailurl', 	        $_POST['mailurl']);
	update_option('blank_facebookurl', 	$_POST['facebookurl']);
	update_option('blank_linkedinurl', 	$_POST['linkedinurl']);
}
?>
<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
		'name' => 'Right Sidebar Single',
		'description' => 'Add Widget Only Show Single Post',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
register_sidebar(array(
		'name' => 'Left Homepage',
		'description' => 'Add Widget Only Show Homepage',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
register_sidebar(array(
		'name' => 'Right Sidebar Single 2',
		'description' => 'Add Widget Only Show Single Post',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
register_sidebar(array(
		'name' => 'Left Footer Homepage',
		'description' => 'Add Widget Only Show Homepage',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
register_sidebar(array(
		'name' => 'Right Footer Homepage',
		'description' => 'Add Widget Only Show Homepage',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));


remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link');


if ( ! isset( $content_width ) )
	$content_width = 625;

function bantenit_setup() {
	load_theme_textdomain( 'bantenit', get_template_directory() . '/languages' );
	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	register_nav_menu( 'primary', __( 'Primary Menu', 'bantenit' ) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 );
}
add_action( 'after_setup_theme', 'bantenit_setup' );

function bantenit_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) )
			$classes[] = 'custom-background-empty';
		elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
			$classes[] = 'custom-background-white';
	}

	return $classes;
}
add_filter( 'body_class', 'bantenit_body_class' );

function bantenit_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'bantenit_customize_register' );


function limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

function blank_comments($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li class="<?php if (1 == $comment->user_id) $oddcomment = "authcomment"; echo $oddcomment; ?>">
<div id="comment-<?php comment_ID(); ?>">
<?php echo get_avatar($comment,$size='74',$default='<path_to_url>' ); ?>
<?php $user_name_str = substr(get_comment_author(),0, 20); ?>
<?php printf('%s', $user_name_str) ?>
<?php if ($comment->comment_approved == '0') : ?>
<p>Comment Awaiting Moderation</p>
<br />
<?php endif; ?>
<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?><?php comment_text() ?>
</div>
<?php }?>