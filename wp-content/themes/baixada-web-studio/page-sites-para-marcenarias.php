<?php
get_header();
$slug = 'sites-para-marcenarias';
$homePageId = get_page_id_by_slug($slug);
include 'components/main-banner.php';
include 'components/hiring.php';
include 'components/offer.php';
include 'components/depositions.php';
get_footer();
