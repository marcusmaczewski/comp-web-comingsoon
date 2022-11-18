<?php 

	require_once(ABSPATH . 'wp-content/themes/layback-child/inc/performance.php');
    $optimize = new MakeitWorkPress\WP_Optimize\Optimize(array(
        'disable_comments'          => true, // Disables the comments functionality and removes it from the admin menu.
        'disable_emoji'             => true,  // Removes the scripts that are enqueued for displaying emojis.
        'disable_feeds'             => true, // Removes the post feeds.
        'disable_heartbeat'         => true, // Unregisters the heartbeat scripts, which is usually responsible for autosaves.
        'disable_rest_api'          => true, // Disables the rest api.
    ));

	get_header();

	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );
	
		endwhile;

	endif;

	get_footer();