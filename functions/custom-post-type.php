<?php
/*  markcond Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.
*/

// function set_custom_posts() { 
// 	// creating (registering) the custom type 
// 	register_post_type( 'event', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
// 	 	// let's now add all the options for this post type
// 		array('labels' => array(
// 			'name' => __('Events', ' markcondwp'), /* This is the Title of the Group */
// 			'singular_name' => __('Event', ' markcondwp'), /* This is the individual type */
// 			'all_items' => __('All Events', ' markcondwp'), /* the all items menu item */
// 			'add_new' => __('Add New Event', ' markcondwp'), /* The add new menu item */
// 			'add_new_item' => __('Add New Events', ' markcondwp'), /* Add New Display Title */
// 			'edit' => __( 'Edit Event', ' markcondwp' ), /* Edit Dialog */
// 			'edit_item' => __('Edit Event', ' markcondwp'), /* Edit Display Title */
// 			'new_item' => __('New Events', ' markcondwp'), /* New Display Title */
// 			'view_item' => __('View Events', ' markcondwp'), /* View Display Title */
// 			'search_items' => __('Search Events', ' markcondwp'), /* Search Custom Type Title */ 
// 			'not_found' =>  __('Nothing found in the Database.', ' markcondwp'), /* This displays if there are no entries yet */ 
// 			'not_found_in_trash' => __('Nothing found in Trash', ' markcondwp'), /* This displays if there is nothing in the trash */
// 			'parent_item_colon' => ''
// 			), /* end of arrays */
// 			'description' => __( 'Events posts for promoting upcoming and recurring events.', ' markcondwp' ), /* Custom Type Description */
// 			'public' => true,
// 			'publicly_queryable' => true,
// 			'exclude_from_search' => false,
// 			'show_ui' => true,
// 			'query_var' => true,
// 			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
// 			'menu_icon' => 'dashicons-calendar', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
// 			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
// 			'has_archive' => true, /* you can rename the slug here */
// 			'capability_type' => 'post',
// 			'hierarchical' => false,
// 			/* the next one is important, it tells what's enabled in the post editor */
// 			'show_in_rest' => true,
// 			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'sticky'),
 
			
// 	 	) /* end of options */
// 	); /* end of register post type */

// 	register_post_type( 'affiliate', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
// 			// let's now add all the options for this post type
// 		array('labels' => array(
// 			'name' => __('Affiliates', ' markcondwp'), /* This is the Title of the Group */
// 			'singular_name' => __('Affiliate', ' markcondwp'), /* This is the individual type */
// 			'all_items' => __('All Affiliates', ' markcondwp'), /* the all items menu item */
// 			'add_new' => __('Add New Affiliate', ' markcondwp'), /* The add new menu item */
// 			'add_new_item' => __('Add New Affiliates', ' markcondwp'), /* Add New Display Title */
// 			'edit' => __( 'Edit Affiliate', ' markcondwp' ), /* Edit Dialog */
// 			'edit_item' => __('Edit Affiliate', ' markcondwp'), /* Edit Display Title */
// 			'new_item' => __('New Affiliates', ' markcondwp'), /* New Display Title */
// 			'view_item' => __('View Affiliates', ' markcondwp'), /* View Display Title */
// 			'search_items' => __('Search Affiliates', ' markcondwp'), /* Search Custom Type Title */ 
// 			'not_found' =>  __('Nothing found in the Database.', ' markcondwp'), /* This displays if there are no entries yet */ 
// 			'not_found_in_trash' => __('Nothing found in Trash', ' markcondwp'), /* This displays if there is nothing in the trash */
// 			'parent_item_colon' => ''
// 			), /* end of arrays */
// 			'description' => __( 'Affiliates posts for displaying partners or sponsors associated to events.', ' markcondwp' ), /* Custom Type Description */
// 			'public' => true,
// 			'publicly_queryable' => true,
// 			'exclude_from_search' => false,
// 			'show_ui' => true,
// 			'query_var' => true,
// 			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
// 			'menu_icon' => 'dashicons-businessman', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
// 			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
// 			'has_archive' => 'affiliates', /* you can rename the slug here */
// 			'capability_type' => 'post',
// 			'hierarchical' => false,
// 			'show_in_rest' => true,

// 			/* the next one is important, it tells what's enabled in the post editor */
// 			'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'revisions')
// 			) /* end of options */
// 		); /* end of register post type */
// } 

// add_action( 'init', 'set_custom_posts');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// // now let's add custom categories (these act like categories)
    // register_taxonomy( 'custom_cat', 
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    // 		'labels' => array(
    // 			'name' => __( 'Custom Categories', ' markcondwp' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Category', ' markcondwp' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Categories', ' markcondwp' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Categories', ' markcondwp' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Category', ' markcondwp' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Category:', ' markcondwp' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Category', ' markcondwp' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Category', ' markcondwp' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Category', ' markcondwp' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Category Name', ' markcondwp' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true, 
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 		'rewrite' => array( 'slug' => 'custom-slug' ),
    // 	)
    // );   
    
	// // now let's add custom tags (these act like categories)
    // register_taxonomy( 'custom_tag', 
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    // 		'labels' => array(
    // 			'name' => __( 'Custom Tags', ' markcondwp' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Tag', ' markcondwp' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Tags', ' markcondwp' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Tags', ' markcondwp' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Tag', ' markcondwp' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Tag:', ' markcondwp' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Tag', ' markcondwp' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Tag', ' markcondwp' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Tag', ' markcondwp' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Tag Name', ' markcondwp' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true,
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 	)
    // ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/CMB2/CMB2
    */

/**
 * Modify the event list in admin
 */
// add_filter ('manage_event_posts_columns', 'markcond_filter_event_columns');
// function markcond_filter_event_columns($columns)
// {
// 	$columns = array(
// 		'cb' => $columns['cb'],
// 		'title' => __('Title'),
// 		'scheduled_date' => __('Scheduled date'),
// 		'thumbnail' => __('Thumbnail'),
// 		'author' => __('Author'),
// 		'date' => __('Date'),
// 	);
// 	return $columns;
// }

// add_action('manage_event_posts_custom_column', 'markcond_event_column', 10, 2);
// function markcond_event_column($column, $post_id)
// {
// 	if('scheduled_date' === $column):
// 		$date = get_field('event_date', $post_id);
// 		if(!$date):
//  		else:
// 			echo $date;
// 		endif;
// 	endif;

// 	if('thumbnail' === $column):
// 		$thumbnail = get_field( 'event_thumbnail', $post_id);
// 		if(!$thumbnail):
// 			echo 'No thumbnail added.';
// 		else:
// 			echo "<img src={$thumbnail} width='80' />";
// 		endif;
// 	endif;
// }