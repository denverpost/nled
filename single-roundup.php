<?php
/**
 * Template Name: Roundup
 * 
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php
								the_title( '<textarea style="width:98%;height:98%;border:1% solid black;background-color:#e5e5e5;" readonly>', '</textarea>' );
							?>

						<textarea style="width:98%;height:98%;border:1% solid black;background-color:#e5e5e5;" readonly><?php
								the_content();
							?></textarea>

					</article><!-- #post-## -->
					<?php 

				// End the loop.
				endwhile;
				?>
			</textarea>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
