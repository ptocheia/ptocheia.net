<?php

/*
* Head
* ------------------------------------------------------------------------------
*/

/* wpstart_head */
if ( !function_exists( 'wpstart_head' ) ) {
	function wpstart_head() { 
	?>
	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
	<![endif]-->
	<!-- WPstart v1.1.4 - http://krusze.pl -->
	<?php wp_head(); ?>
	</head>
	<?php
	}
}


/*
* Before header
* ------------------------------------------------------------------------------
*/

/* wpstart_wrapper_start */
if ( !function_exists( 'wpstart_wrapper_start' ) ) {
	function wpstart_wrapper_start() {
	?>
	<div id="wrapper">
	<?php
	}
}


/*
* Header
* ------------------------------------------------------------------------------
*/

/* wpstart_header_start */
if ( !function_exists( 'wpstart_header_start' ) ) {
	function wpstart_header_start() {
	?>
	<header id="header">
	<?php
	}
}

/* wpstart_header_content */
if ( !function_exists( 'wpstart_header_content' ) ) {
	function wpstart_header_content() { 
	?>
	<hgroup>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php $site_description = get_bloginfo('description');
		if ( ! empty( $site_description ) ) : ?>		
		<h2 class="site-description"><?php bloginfo('description'); ?></h2>
		<?php endif; ?>
	</hgroup>
	<?php
	}
}

/* wpstart_header_image */
if ( !function_exists( 'wpstart_header_image' ) ) {
	function wpstart_header_image() {
		$header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" class="header-image" />
		<?php endif;
	}
}

/* wpstart_nav */
if ( !function_exists( 'wpstart_nav' ) ) {
	function wpstart_nav() {
		?>
		<nav id="nav">
			<a class="screen-reader-text" href="#content" title="<?php esc_attr_e( 'Content', 'wpstart' ); ?>"><?php _e( 'Content', 'wpstart' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		</nav>
		<?php
	}
}

/* wpstart_header_end */
if ( !function_exists( 'wpstart_header_end' ) ) {
	function wpstart_header_end() { 
	?>
	</header><!-- #header -->
	<?php
	}
}


/*
* After header
* ------------------------------------------------------------------------------
*/

// wpstart_after_header


/*
* Main
* ------------------------------------------------------------------------------
*/

/* wpstart_main_start */
if ( !function_exists( 'wpstart_main_start' ) ) {
	function wpstart_main_start() { 
		?>
		<div id="main" class="template-2columns-right">
		<?php
	}
}


/*
* Container
* ------------------------------------------------------------------------------
*/

/* wpstart_container_start */
if ( !function_exists( 'wpstart_container_start' ) ) {
	function wpstart_container_start() { 
		if ( is_archive() || is_author() || is_category() || is_search() || is_tag() ) { ?>
			<section id="container">
		<?php } else { ?>
			<div id="container">
		<?php }
	}
}


/*
* Content
* ------------------------------------------------------------------------------
*/

/* wpstart_content_start */
if ( !function_exists( 'wpstart_content_start' ) ) {
	function wpstart_content_start() { 
		?>
		<div id="content">
		<?php
	}
}


/*
* Posts
* ------------------------------------------------------------------------------
*/

/* wpstart_page_title */
if ( !function_exists( 'wpstart_page_title' ) ) {
	function wpstart_page_title() {
	?>
	<?php if ( !is_home() || !is_front_page() ) { ?>
	<header class="archive-header">
	<?php if (is_author()) { ?>
		<?php the_post(); ?>	
		<h1 class="page-title"><?php printf( __('Posts by %s', 'wpstart'), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '">' . get_the_author() . '</a></span>' ); ?></h1>
		<?php rewind_posts(); ?>
	<?php } elseif (is_category()) { ?>
		<h1 class="page-title"><?php printf( __( 'You are currently browsing the archives for the %s category.', 'wpstart' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) ) : ?>
				<div class="category-description"><?php echo category_description(); ?></div>
		<?php endif; ?>			
	<?php } elseif (is_search()) { ?>
		<h1 class="page-title"><?php printf( __( 'Search results for &#8220;%s&#8221;', 'wpstart' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<?php } elseif (is_tag()) { ?>
		<h1 class="page-title"><?php printf( __( 'Tag Archives: %s', 'wpstart' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
	<?php } elseif (is_day()) { ?>
		<h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'wpstart' ), get_the_date() ); ?></h1>
	<?php } elseif (is_month()) { ?>
		<h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'wpstart' ), get_the_date( 'F Y' ) ); ?></h1>
	<?php } elseif (is_year()) { ?>
		<h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'wpstart' ), get_the_date( 'Y' ) ); ?></h1>
	<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="page-title"><?php _e( 'Archives', 'wpstart' ); ?></h1>
	<?php } ?>
	</header>
	<?php } ?>
	<?php
	}
}

/* wpstart_post_start */
if ( !function_exists( 'wpstart_post_start' ) ) {
	function wpstart_post_start() {
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
	}
}

/* wpstart_entry_header_start */
if ( !function_exists( 'wpstart_entry_header_start' ) ) {
	function wpstart_entry_header_start() {
	?>
	<header class="entry-header">
	<?php
	}
}

/* wpstart_entry_title */
if ( !function_exists( 'wpstart_entry_title' ) ) {
	function wpstart_entry_title() {
	if ( is_single() || is_page() ) { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } else { ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array('before' => esc_attr__( 'Permalink: ', 'wpstart' ), 'after' => '')); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
	<?php }
	}
}

/* wpstart_meta_date */
if ( !function_exists( 'wpstart_meta_date' ) ) {
	function wpstart_meta_date() {
	if ( is_single() ) {
		printf('<span class="meta-date"><span class="meta-date-prep">' . __( 'Published on:', 'wpstart' ) . '</span> %1$s',
			sprintf( '<time datetime="%1$s">%2$s</time></span> ',
				esc_attr( get_the_date( 'c' ) ),
				get_the_date()
			)
		);
	} else {
		printf('<span class="meta-date"><span class="meta-date-prep">' . __( 'Published on:', 'wpstart' ) . '</span> %1$s',
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a></span> ',
				get_permalink(),
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				get_the_date()
			)
		);
	}
	}
}

/* wpstart_meta_author */
if ( !function_exists( 'wpstart_meta_author' ) ) {
	function wpstart_meta_author() {
	printf('<span class="meta-author"><span class="meta-author-prep">' . __( 'Author:', 'wpstart' ) . '</span> %1$s',
		sprintf( '<a href="%1$s" class="meta-author-link" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View posts by this author', 'wpstart' ), get_the_author() ),
			get_the_author()
		)
	);
	}
}

/* wpstart_meta_comments */
if ( !function_exists( 'wpstart_meta_comments' ) ) {
	function wpstart_meta_comments() {
	if ( comments_open() && ! post_password_required() ) :
		echo ' ' . '<span class="meta-comments">';
			comments_popup_link( __( 'Leave a comment', 'wpstart' ), __( '1 Comment', 'wpstart' ), __( '% Comments', 'wpstart' ), 'meta-comments-link' );
		echo '</span>';
	endif;
	}
}

/* wpstart_entry_header_end */
if ( !function_exists( 'wpstart_entry_header_end' ) ) {
	function wpstart_entry_header_end() {
	?>
	</header><!-- .entry-header -->
	<?php
	}
}

/* wpstart_post_entry_content_start */
if ( !function_exists( 'wpstart_post_entry_content_start' ) ) {
	function wpstart_post_entry_content_start() {
		?>
		<div class="entry-summary">
		<?php
	}
}

/* wpstart_post_entry_thumbnail */
if ( !function_exists( 'wpstart_post_entry_thumbnail' ) ) {
	function wpstart_post_entry_thumbnail() {
		if (has_post_thumbnail()){ ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array('before' => esc_attr__( 'Permalink: ', 'wpstart' ), 'after' => '')); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
		<?php }
	}
}

/* wpstart_post_entry_content */
if ( !function_exists( 'wpstart_post_entry_content' ) ) {
	function wpstart_post_entry_content() {
		the_excerpt();
	}
}

/* wpstart_post_entry_content_end */
if ( !function_exists( 'wpstart_post_entry_content_end' ) ) {
	function wpstart_post_entry_content_end() {
		?>
		</div><!-- .entry-summary -->
		<?php
	}
}

/* wpstart_entry_footer_start */
if ( !function_exists( 'wpstart_entry_footer_start' ) ) {
	function wpstart_entry_footer_start() {
	?>
	<footer class="entry-footer">
	<?php
	}
}

/* wpstart_meta_categories */
if ( !function_exists( 'wpstart_meta_categories' ) ) {
	function wpstart_meta_categories() {
		if ( count( get_the_category() ) ) :			
			echo '<span class="meta-categories">';
				printf('<span class="%1$s">' . __( 'Categories', 'wpstart' ) . ':</span> %2$s', 'meta-categories-prep', get_the_category_list( ', ' ) );
			echo '</span>';
		endif;
	}
}

/* wpstart_meta_tags */
if ( !function_exists( 'wpstart_meta_tags' ) ) {
	function wpstart_meta_tags() {
		$tags = get_the_tag_list( '', ', ' );
		if ( $tags ):
			echo ' ' . '<span class="meta-tags">';
				printf( '<span class="%1$s">%2$s</span> %3$s', 'meta-tags-prep', __( 'Tags:', 'wpstart' ), $tags );
			echo '</span>';
		endif;
	}
}

/* wpstart_edit_post_link */
if ( !function_exists( 'wpstart_edit_post_link' ) ) {
	function wpstart_edit_post_link() {
		edit_post_link( __( '(Edit)', 'wpstart' ), '<span class="edit-link">', '</span>' );	
	}
}

/* wpstart_entry_footer_end */
if ( !function_exists( 'wpstart_entry_footer_end' ) ) {
	function wpstart_entry_footer_end() {
	?>
	</footer><!-- .entry-footer -->
	<?php
	}
}

/* wpstart_post_end */
if ( !function_exists( 'wpstart_post_end' ) ) {
	function wpstart_post_end() {
		?>
		</article><!-- #post -->
		<?php
	}
}

/* wpstart_post_pagination */
if ( !function_exists( 'wpstart_post_pagination' ) ) {
	function wpstart_post_pagination() {
		global $wp_query;
		if (  $wp_query->max_num_pages > 1 ) : ?>
		<div class="navigation">
			<?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } else { ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older', 'wpstart' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer <span class="meta-nav">&rarr;</span>', 'wpstart' ) ); ?></div>
			<?php } ?>
		</div>
		<?php endif;
	}
}

/* wpstart_post_no_results_not_found */
if ( !function_exists( 'wpstart_post_no_results_not_found' ) ) {
	function wpstart_post_no_results_not_found() {
		?>
		<article id="post-0" class="post no-results not-found">
			<header>
				<h1 class="entry-title">
				<?php if ( is_search() ) { ?>
					<?php _e( 'No posts found.', 'wpstart' ); ?>
				<?php } else { ?>
					<?php _e( 'Page not found', 'wpstart' ); ?>
				<?php } ?>
				</h1>
			</header>
			<div class="entry-content">
			<?php if ( is_search() ) { ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'wpstart' ); ?></p>
				<?php get_search_form(); ?>
			<?php } else { ?>
				<?php get_search_form(); ?>
			<?php } ?>
			</div>
		</article><!-- #post -->
		<?php
	}
}


/*
* Single
* ------------------------------------------------------------------------------
*/

// wpstart_post_start
// wpstart_entry_header_start
// wpstart_entry_title
// wpstart_meta_date
// wpstart_meta_author
// wpstart_meta_comments
// wpstart_entry_header_end

/* wpstart_single_entry_content_start */
if ( !function_exists( 'wpstart_single_entry_content_start' ) ) {
	function wpstart_single_entry_content_start() {
		?>		
		<div class="entry-content">
		<?php
	}
}

/* wpstart_single_entry_thumbnail */
if ( !function_exists( 'wpstart_single_entry_thumbnail' ) ) {
	function wpstart_single_entry_thumbnail() {
		if ( has_post_thumbnail()) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
		echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
		the_post_thumbnail();
		echo '</a>';
		}
	}
}

/* wpstart_single_entry_content */
if ( !function_exists( 'wpstart_single_entry_content' ) ) {
	function wpstart_single_entry_content() {
		the_content();			
		wp_link_pages( array( 'before' => '<div class="link-pages"><span class="link-pages-prep">' . __( 'Pages:', 'wpstart' ) . '</span>', 'after' => '</div>' ) );
	}
}

/* wpstart_single_entry_content_end */
if ( !function_exists( 'wpstart_single_entry_content_end' ) ) {
	function wpstart_single_entry_content_end() {
		?>		
		</div><!-- .entry-content -->
		<?php
	}
}

// wpstart_entry_footer_start
// wpstart_meta_categories
// wpstart_meta_tags
// wpstart_edit_post_link
// wpstart_entry_footer_end
// wpstart_post_end

/* wpstart_single_entry_navigation */
if ( !function_exists( 'wpstart_single_entry_navigation' ) ) {
	function wpstart_single_entry_navigation() {
		?>
		<div class="entry-navigation">
			<?php previous_post_link('%link', '<span> &larr; </span> %title'); ?>
			<?php next_post_link('%link', '%title <span> &rarr; </span>'); ?>
		</div>
		<?php
	}
}


/*
* Attachment
* ------------------------------------------------------------------------------
*/

// wpstart_post_start
// wpstart_entry_header_start
// wpstart_entry_title

/* wpstart_back_to_entry */
if ( !function_exists( 'wpstart_back_to_entry' ) ) {
	function wpstart_back_to_entry() { 
		global $post; ?>
		<p><span class="back-to-entry"><a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php esc_attr( get_the_title( $post->post_parent ) ); ?>">
		<?php printf( __( '&larr; Back to %s', 'wpstart' ), get_the_title( $post->post_parent ) ); ?></a></span></p>
	<?php }
}

// wpstart_meta_date
// wpstart_meta_author
// wpstart_meta_comments
// wpstart_entry_header_end

/* wpstart_attachment_entry_content_start */
if ( !function_exists( 'wpstart_attachment_entry_content_start' ) ) {
	function wpstart_attachment_entry_content_start() {
		?>		
		<div class="entry-attachment">
		<?php
	}
}

/* wpstart_attachment_entry_content */
if ( !function_exists( 'wpstart_attachment_entry_content' ) ) {
	function wpstart_attachment_entry_content() {
		if ( wp_attachment_is_image() ) : ?>
			<img class="aligncenter" src="<?php echo wp_get_attachment_url(); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
		<?php else: ?>
			<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php echo basename( get_permalink() ); ?></a>
		<?php endif;
	}
}

/* wpstart_attachment_entry_content_end */
if ( !function_exists( 'wpstart_attachment_entry_content_end' ) ) {
	function wpstart_attachment_entry_content_end() {
		?>		
		</div><!-- .entry-attachment -->
		<?php
	}
}

// wpstart_entry_footer_start

/* wpstart_meta_dimensions */
if ( !function_exists( 'wpstart_meta_dimensions' ) ) {
	function wpstart_meta_dimensions() {
		if ( wp_attachment_is_image() ) {
			$metadata = wp_get_attachment_metadata();
			printf( __( '<span class="meta-dimensions">' . __( 'Original dimensions', 'wpstart' ) . ' %s</span>', 'wpstart' ),
				sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
					wp_get_attachment_url(),
					esc_attr( __( 'Link to image', 'wpstart' ) ),
					$metadata['width'],
					$metadata['height']
				)
			);
		}
	}
}

// wpstart_edit_post_link
// wpstart_entry_footer_end
// wpstart_post_end

/* wpstart_attachment_entry_navigation */
if ( !function_exists( 'wpstart_attachment_entry_navigation' ) ) {
	function wpstart_attachment_entry_navigation() {
		?>
		<div class="attachment-navigation">
			<span class="previous-attachment"><?php previous_image_link( false, __( '&laquo; Previous', 'wpstart' ) ); ?></span>
			<span class="next-attachment"><?php next_image_link( false, __( 'Next &raquo;', 'wpstart' ) ); ?></span>
		</div>
		<?php
	}
}


/*
* Page
* ------------------------------------------------------------------------------
*/

// wpstart_post_start
// wpstart_entry_header_start
// wpstart_entry_title
// wpstart_entry_header_end

/* wpstart_page_entry_content_start */
if ( !function_exists( 'wpstart_page_entry_content_start' ) ) {
	function wpstart_page_entry_content_start() {
		?>		
		<div class="entry-content">
		<?php
	}
}

/* wpstart_page_entry_content */
if ( !function_exists( 'wpstart_page_entry_content' ) ) {
	function wpstart_page_entry_content() {
		the_content();
		wp_link_pages( array( 'before' => '<div class="link-pages"><span class="link-pages-prep">' . __( 'Pages:', 'wpstart' ) . '</span>', 'after' => '</div>' ) );
	}
}

/* wpstart_page_entry_content_end */
if ( !function_exists( 'wpstart_page_entry_content_end' ) ) {
	function wpstart_page_entry_content_end() {
		?>		
		</div><!-- .entry-content -->
		<?php
	}
}

// wpstart_entry_footer_start
// wpstart_edit_post_link
// wpstart_entry_footer_end
// wpstart_post_end


/*
* After content
* ------------------------------------------------------------------------------
*/

/* wpstart_content_end */
if ( !function_exists( 'wpstart_content_end' ) ) {
	function wpstart_content_end() { 
		?>
		</div><!-- #content -->
		<?php
	}
}


/*
* After container
* ------------------------------------------------------------------------------
*/

/* wpstart_container_end */
if ( !function_exists( 'wpstart_container_end' ) ) {
	function wpstart_container_end() { 
		if ( is_archive() || is_author() || is_category() || is_search() || is_tag() ) { ?>
			</section><!-- #container -->
		<?php } else { ?>
			</div><!-- #container -->
		<?php }
	}
}


/*
* After main
* ------------------------------------------------------------------------------
*/

/* wpstart_main_end */
if ( !function_exists( 'wpstart_main_end' ) ) {
	function wpstart_main_end() { 
		?>
		</div><!-- #main -->
		<?php
	}
}


/*
* Before footer
* ------------------------------------------------------------------------------
*/

// wpstart_before_footer


/*
* Footer
* ------------------------------------------------------------------------------
*/

/* wpstart_footer_start */
if ( !function_exists( 'wpstart_footer_start' ) ) {
	function wpstart_footer_start() { 
		?>
		<footer id="footer">
		<?php
	}
}

/* wpstart_footer_content */
if ( !function_exists( 'wpstart_footer_content' ) ) {
	function wpstart_footer_content() { 
	?>
	<?php get_sidebar('footer'); ?>
			
	<?php if ( is_active_sidebar( 'colophon' ) ) : ?>
		<div class="sidebar sidebar-colophon">
			<?php dynamic_sidebar( 'colophon' ); ?>
		</div>
	<?php else: ?>	
		<div class="sidebar sidebar-colophon">
			<aside id="text" class="widget-container widget_text">		
				<div class="textwidget">
					<p>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="site-info"><?php bloginfo( 'name' ); ?></a>. <a href="http://wordpress.org" title="<?php echo esc_attr( _e( 'Powered by WordPress', 'wpstart' ) ); ?>" class="site-generator"><?php echo esc_attr( _e( 'Powered by WordPress', 'wpstart' ) ); ?></a> &amp; <a href="http://krusze.pl/wpstart" title="WPstart Theme" class="site-webdesign" target="_blank">WPstart Theme</a>.</p>	
				</div>
			</aside>
		</div>
	<?php endif; ?>
	<?php
	}
}

/* wpstart_footer_end */
if ( !function_exists( 'wpstart_footer_end' ) ) {
	function wpstart_footer_end() { 
	?>
	</footer><!-- #footer -->
	<?php
	}
}


/*
* After footer
* ------------------------------------------------------------------------------
*/

/* wpstart_wrapper_end */
if ( !function_exists( 'wpstart_wrapper_end' ) ) {
	function wpstart_wrapper_end() { 
	?>
	</div><!-- #wrapper -->
	<?php
	}
}


/*
* General
* ------------------------------------------------------------------------------
*/

/* wpstart_search_form */
if ( !function_exists( 'wpstart_search_form' ) ) {
	function wpstart_search_form() {
		?>		
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div>
				<label class="screen-reader-text" for="s"><?php _e( 'Search', 'wpstart' ) ?></label>
				<input type="text" value="" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'wpstart' ) ?>" />
			</div>
		</form>
		<?php
	}
} ?>