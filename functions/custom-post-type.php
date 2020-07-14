<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'projects', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Projects', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Project', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Projects', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Project', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Project', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Project', 'jointswp'), /* New Display Title */
			'view_item' => __('View Project', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Project', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Project posts', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-building', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'projects', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'projects', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'projects-category');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'projects-tag');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'projects-category', 
    	array('projects'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Project Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Project Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Project Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Project Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Project Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Project Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Project Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Project Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Project Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Project Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'all-projects' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'projects-tag', 
    	array('projects'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Project Tags', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Project Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Project Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Project Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Project Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Project Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Project Tag', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Project Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Project Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Project Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    