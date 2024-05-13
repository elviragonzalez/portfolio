<?php wp_footer()?>

<footer>      

    <?php $footerLoop = new WP_Query(array(
        "post_type" => "footer",
        "posts_per_page" => -1
    )); ?>

    <?php if($footerLoop->have_posts()): ?>
        <?php while($footerLoop->have_posts()): $footerLoop->the_post() ?>

    <?php 
        $spotify = get_field('spotify');
        $youtube = get_field('youtube');
        $linkedin = get_field('linkedin');
        $instagram = get_field('instagram');
        $tiktok = get_field('tiktok');
        $title_footer = get_field('title_footer');
    ?>
    
    <div class="row" id="icons">
        <!-- Spotify -->
        <a href="<?php echo esc_url($spotify); ?>"><i class="fab fa-spotify"></i></a>
        <!-- YouTube -->
        <a href="<?php echo esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a>
        <!-- LinkedIn -->
        <a href="<?php echo esc_url($linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
        <!-- Instagram -->
        <a href="<?php echo esc_url($instagram); ?>"><i class="fab fa-instagram"></i></a>
        <!-- TikTok -->
        <a href="<?php echo esc_url($tiktok); ?>"><i class="fab fa-tiktok"></i></a>
    </div>

    <h1 id="title_footer"><?php echo esc_html($title_footer); ?></h1>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata()?>
</footer>
