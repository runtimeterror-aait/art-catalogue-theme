<nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-lg-top">
    <div class="container-fluid px-3">
        <a class="navbar-brand display-6 fw-bold" href="<?php echo  get_home_url() ?>"><?php bloginfo('name'); ?></a>
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="bi bi-list" style="font-size: 2rem; color: black"></i>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="mt-5">
                <?php get_search_form(); ?> <?php wp_nav_menu(array(
                                                'theme_location' => 'menu-1',
                                                'menu_class' => 'sidebar row text-center mt-4'
                                            )); ?>
            </div>
        </div>
    </div>
</nav>