<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <?php 
    wp_head();
    wp_enqueue_style( 'my-stylesheet', get_template_directory_uri() . '/assets/css/index.css' );
    wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/assets/js/index.js' );
    ?>
</head>

<body <?php body_class(); ?>
    <div></div>
    <?php get_template_part( 'header' ); ?>
    <div class="bg-image   shadow-1-strong p-5"
        style="background-image: url(https://images.unsplash.com/photo-1510935813936-763eb6fbc613?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1478&q=80); height: 100vh;">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div class="card p-4" style="width: 80rem;">
                    <div class="card-body">
                        <div class="site-content">
    <?php
    if ( have_posts() ) :

      while ( have_posts() ) :

        the_post();
        ?>

        <article <?php post_class(); ?>>

		<?php the_post_thumbnail(); ?>

          <header class="entry-header">
            <?php the_title( '<h1 class="card-title text-secondary text-center">', '</h1>' ); ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php the_content( esc_html__( 'Continue reading &rarr;', 'art-catalogue' ) ); ?>
          </div><!-- .entry-content -->

        </article><!-- #post-## -->

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile;

	  else :
        get_template_part( 'content-none' );
      endif;
    ?>
  </div><!-- .site-content -->
                    </div>
                </div>
            </div>
        </div>

    </div>

  <?php get_template_part( 'footer' ); ?>