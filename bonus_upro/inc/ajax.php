<?php 

$actions = [
	'filter_relationship_by_category',
];
foreach ($actions as $action) {
	add_action("wp_ajax_{$action}", $action);
	add_action("wp_ajax_nopriv_{$action}", $action);
}


/*function filter_relationship_by_category() {
	$category_id = $_POST['category'];

    // Fetch posts in the selected category
	$args = array(
		'category' => $category_id,
		'posts_per_page' => -1
	);
	$posts = get_posts($args);

	$response = array();
	foreach ($posts as $post) {
		$response[] = array(
			'id' => $post->ID,
			'title' => $post->post_title
		);
	}

	echo json_encode($response);
	wp_die();
}*/