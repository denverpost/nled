<?php
/**
 * The template for displaying archive pages
 *
 * Redirects all archives to the home page
 *
 *
 * @package WordPress
 * @subpackage nled
 * @since nled 0.1
 */

$homepg=get_bloginfo('url');
header("Location: $homepg",TRUE,301);
?>
