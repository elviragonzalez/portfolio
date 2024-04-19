<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $writingLoop = new WP_Query(array(
                "post_type" => "writing",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($writingLoop->have_posts()): ?>
                <?php while($writingLoop->have_posts()): $writingLoop->the_post() ?>
                    <?php
                    $writingAbout = get_field("writing_about");
                    $writingBlog = get_field("writing_blog");
                    ?>

<div class="col-6" id="text"> <?php echo $writingAbout?>
        <div class="row-12">
            <a href="<?php echo $writingBlog?>"></a>
        </div>
</div>

<?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>