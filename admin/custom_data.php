<?php
VP_Security::instance()->whitelist_function('twi_woo_st_dep_grid');

function twi_woo_st_dep_grid($value)
{
	if($value === 'twi_woo_grid' || $value === 'twi_woo_mansonry')
		return true;
	return false;
}
VP_Security::instance()->whitelist_function('twi_slider_dep');

function twi_slider_dep($value)
{
	if($value === 'twi_woo_slider')
		return true;
	return false;
}
VP_Security::instance()->whitelist_function('twi_get_woo_short');
function twi_get_woo_short()
{
	$wp_posts = get_posts(array(
		'post_type' => 'twi_woo_g_car',
		'posts_per_page' => -1,
	));

	$result = array();
	foreach ($wp_posts as $post)
	{
		$result[] = array('value' => $post->ID, 'label' => $post->post_title);
	}
	return $result;
}
function twi_get_categories()
{
	$taxonomy = 'product_cat';
    $terms = get_terms( $taxonomy, '' );

	$res = array();
	foreach ($terms as $term)
	{
		$res[] = array('value' => $term->slug, 'label' => $term->name);
	}
	return $res;
}
VP_Security::instance()->whitelist_function('twi_woo_cat_filter_fun');

function twi_woo_cat_filter_fun($value)
{
	if($value === 'twi_woo_cats')
		return true;
	return false;
}
VP_Security::instance()->whitelist_function('twi_woo_spe_filter_fun');

function twi_woo_spe_filter_fun($value)
{
	if($value === 'twi_woo_sepcial_cat')
		return true;
	return false;
}
?>