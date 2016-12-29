<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ReCover
 */

if ( ! function_exists( 'recover_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function recover_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .
		get_avatar( get_the_author_meta( 'ID' ), 35, '', 'Profile Picture for ' . esc_html( get_the_author() ) ) .
		'<span class="author-text">' . esc_html( get_the_author() ) . '</span></a></span>'
	);

	echo '<span class="byline"> ' . $byline . '</span> &mdash; <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'recover_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function recover_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'recover' ) );
		if ( $categories_list && recover_categorized_blog() ) {
			printf( '<div class="cat-links">' . recover_get_svg( array( 'icon' => 'folder', 'title' => __( 'Categories', 'recover' ) ) ) . $categories_list . '</div>' ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'recover' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . recover_get_svg( array( 'icon' => 'tag', 'title' => __( 'Tags', 'recover' ) ) ) . $tags_list . '</div>' ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'recover' ), esc_html__( '1 Comment', 'recover' ), esc_html__( '% Comments', 'recover' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'recover' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<div class="edit-link">' . recover_get_svg( array( 'icon' => 'pencil', 'title' => __( 'Edit Post', 'recover' ) ) ),
		'</div>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function recover_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'recover_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'recover_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so recover_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so recover_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in recover_categorized_blog.
 */
function recover_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'recover_categories' );
}
add_action( 'edit_category', 'recover_category_transient_flusher' );
add_action( 'save_post',     'recover_category_transient_flusher' );