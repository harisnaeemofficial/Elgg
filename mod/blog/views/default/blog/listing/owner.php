<?php

/**
 * List user blogs
 *
 * @uses $vars['entity'] User
 * @uses $vars['created_after']  Only show blogs created after a date
 * @uses $vars['created_before'] Only show blogs created before a date
 * @uess $vars['status'] Filter by status
 */

$entity = elgg_extract('entity', $vars);

$vars['options'] = [
	'owner_guids' => (int) $entity->guid,
	'preload_owners' => false,
];

echo elgg_view('blog/listing/all', $vars);
