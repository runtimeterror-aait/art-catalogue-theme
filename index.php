<?php
global $page, $pages; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

  <?php
  wp_head();
  wp_enqueue_style('my-stylesheet', get_template_directory_uri() . '/assets/css/index.css');
  wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/index.js');
  ?>
</head>

<body <?php body_class(); ?> <div>
  </div>
  <?php get_template_part('header'); ?>
  <div class="bg-image p-5 text-center shadow-1-strong text-white" style="
        background-image: url('https://images.unsplash.com/photo-1547891654-e66ed7ebb968?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
        height: 100vh; background-attachment: fixed;
      ">
    <div class="row align-items-center h-100">
      <div class="d-grid mt-5 p-md-5 gap-md-5 gap-3 col-lg-4 col-md-6 col-10 mx-auto">
        <a href="#exhibitions" class="btn btn-dark p-4"><?= get_the_title() ?></a>
      </div>
      <i onclick="scrollDown('exhibitions')" class="bi btn bi-arrow-down-circle-fill mt-5" style="font-size: 3rem; color: black"></i>
    </div>
  </div>
  <div id="exhibitions">
    <div class="container mt-5">

      <div>
        <h2 class="display-3 text-center mb-5"><?= get_the_title() ?></span></h2>
        <hr>
      </div>

      <div class="container mt-5">
        <div class="row d-flex justify-content-center p-2">
          <?php
          if (have_posts()) :
            while (have_posts()) :

              the_post();
          ?>
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?= the_title() ?></h5>
                    <p class="card-text"><?php the_content(esc_html__('Continue reading &rarr;', 'art-catalogue')); ?></p>
                    <a href="<?= esc_url(get_permalink()) ?>" class="btn btn-dark">Read More</a>
                  </div>
                </div>
              </div>
          <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if (comments_open() || get_comments_number()) :
                comments_template();
              endif;

            endwhile;
            the_posts_navigation();

          else :
            get_template_part('content-none');
          endif;
          ?>
        </div>
        <center class="pt-3">
        <?php
        
            // This shows the Previous link
            wp_link_pages(array(
              'before' => '<div class="page-link-next-prev">',
              'after' => '', 'previouspagelink' => 'Previous', 'nextpagelink' => '',
              'next_or_number' => 'next'
            ));

            // This shows the page count i.e. "1 of 5"
            echo ($page . ' of ' . count($pages));

            // This shows the Next link
            wp_link_pages(array(
              'before' => '', 'after' => '</div>', 'previouspagelink' => '',
              'nextpagelink' => 'Next', 'next_or_number' => 'next'
            ));
        ?>
        </center>
      </div>


    </div>
  </div>
  <?php get_template_part('footer'); ?>