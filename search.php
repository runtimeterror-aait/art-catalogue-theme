<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

	<?php
	wp_head();
	wp_enqueue_style('my-stylesheet', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/index.js');
	?>
</head

<body <?php body_class(); ?> <div>
	</div>
	<?php get_template_part('header'); ?>
	<div class="bg-image p-5 text-center shadow-1-strong text-white" style="
        background-image: url('https://images.unsplash.com/photo-1547891654-e66ed7ebb968?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
        height: 100vh; background-attachment: fixed;
      ">
		<div class="row align-items-center h-100">
			<div class="d-grid mt-5 p-md-5 gap-md-5 gap-3 col-lg-4 col-md-6 col-10 mx-auto">
				<a href="#exhibitions" class="btn btn-dark p-4">
					<h3><?php
						/* translators: %s: the search query */
						printf(esc_html__('Search Results for: %s', 'scaffold'), '<span>' . get_search_query() . '</span>');
						?></h3>
				</a>
			</div>
			<i onclick="scrollDown('exhibitions')" class="bi btn bi-arrow-down-circle-fill mt-5" style="font-size: 3rem; color: black"></i>
		</div>
	</div>