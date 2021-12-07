<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.
//New query
// $child_qu = array(
// 	'post_type' =>'post',
// 	'post_status' => 'publish',
// 	'post_per_page' => 3,
// );
// $child_query = WP_Query(child_qu);

// if($child_query ->have_posts()) {
// 	while($child_query ->have_posts) {
// 		$child_query ->the_posts();
// 		?>
// 		<p><?phpthe_title(); ?></p>
// 	}
// 	wp_reset_postdata();
// }

get_footer();
?>