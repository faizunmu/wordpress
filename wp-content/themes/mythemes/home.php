<?php
get_header();

if (is_home()) {
    get_template_part('template-parts/nav/nav');

    ?><h1>Hello World</h1><?php
}

get_footer();