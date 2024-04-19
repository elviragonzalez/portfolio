<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $filmLoop = new WP_Query(array(
                "post_type" => "short-films",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($filmLoop->have_posts()): ?>
                <?php while($filmLoop->have_posts()): $filmLoop->the_post() ?>
                    <?php
                    $intro = get_field("intro");
                    $hayAlgo = get_field("hay_algo");
                    $ahora = get_field("ahora");
                    $obsesion = get_field("obsesion");
                    $newGirl = get_field("new_girl");
                    $mommy = get_field("mommy");
                    $angels = get_field("angels");
                    $foot = get_field("foot");
                    ?>



<div class="text"><?php echo $intro?></div>


        <div class="subtitle">
            SHORT FILMS <!-- hay que hacer el rectangulo en css-->
        </div>

        <div class="container" id="gallery" >
            
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $hayAlgo ['url']; ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-6">
                    <img src="<?php echo $ahora ['url']; ?>" class="img-fluid" alt="...">
                </div>             
            </div>

            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $obsesion ['url']; ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-6">
                    <img src="<?php echo $new_girl ['url']; ?>" class="img-fluid" alt="...">
                </div>              
            </div>

            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $mommy ['url']; ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-6">
                    <img src="<?php echo $angels ['url']; ?>" class="img-fluid" alt="...">
                </div>              
            </div>
            
        </div>

        <div class="p"><?php echo $foot?></div>

        <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>











<?php get_footer() ?>
        