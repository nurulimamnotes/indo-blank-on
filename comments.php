<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks.');
if (!empty($post->post_password)) {
if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {?>
<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
<?php
return;}}
$oddcomment = 'authcomment';
?>
<?php if ( have_comments() ) : ?>
<h3><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h3>
<ol class="commentlist">
<?php wp_list_comments('callback=blank_comments'); ?>
</ol>
<div id="pagcomment">
<?php previous_comments_link( '&larr;', 3 ); ?><?php next_comments_link( '&rarr;', 3 ); ?>
</div>
<div style="clear:both"></div>
<?php if ( comments_open() ) : ?>
<?php endif; ?>
<?php endif; ?>
<?php comment_form(); ?>