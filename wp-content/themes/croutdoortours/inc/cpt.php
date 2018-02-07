<?php

function outdoortours_get_meta_box($meta_boxes)
{
	$prefix = 'rw_';

	$meta_boxes[] = array(
		'id' => 'info',
		'title' => esc_html__('Additional Info', 'outdoortours'),
		'post_types' => array('tour','page'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'gallery',
				'type' => 'image_advanced',
				'name' => esc_html__('Gallery', 'outdoortours'),
			),
			array(
				'name' => __('Details', 'outdoortours'),
				'desc' => '',
				'id' => $prefix . 'details',
				'type' => 'wysiwyg',
				'std' => '',
				'class' => 'custom-class',
				'clone' => false,
			),
		),
	);

	return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'outdoortours_get_meta_box');
