<div class="row">
    <div class="col">

        <?php

        if (have_posts()) :
        ?>
            <div class="card-post mb-5">
                <a href="<?php the_permalink() ?>">
                    <div class="thumbnail">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    </div>
                    <div class="details">
                        <a href="<?php the_permalink() ?>" class="bold-text"><?php the_title() ?></a>
                        <div class="normal"><?php the_excerpt() ?></div>
                    </div>
                </a>
            </div>
        <?php

        endif;
        ?>


        <div class="row">
            <?php
            $query = new WP_Query('offset=1');
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="col-6">
                        <a href="<?php the_permalink() ?>">
                            <div class="card-post mb-3">
                                <div class="thumbnail">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                </div>
                                <div class="details">
                                    <a href="<?php the_permalink() ?>" class="bold-text"><?php the_title() ?></a>
                                    <div class="normal"><?php the_excerpt() ?></div>
                                </div>
                            </div>
                        </a>
                    </div>


                <?php
                endwhile;
            else :
                ?><span>Post not found</span><?php
                                            endif;
                                                ?>
        </div>


    </div>
    <?php get_sidebar('primary') ?>
</div>