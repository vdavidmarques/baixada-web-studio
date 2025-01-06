<?php
    get_header();
    $slug = 'pagina-inicial';
    $homePageId = get_page_id_by_slug($slug);
    include 'components/main-banner.php';
    include 'components/hiring.php';
    include 'components/offer.php';
    include 'components/works.php';
    include 'components/about.php';
    include 'components/news.php';
    get_footer();