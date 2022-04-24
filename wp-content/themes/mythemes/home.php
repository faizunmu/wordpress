<?php
get_header();

if (is_home()) {
    get_template_part('template-parts/nav/nav');

?>
    <div class="main-area my-5">
        <div class="container">
            <?php
            get_template_part('template-parts/post/post');
            ?>
        </div>
    </div>
<?php
}

get_footer();
