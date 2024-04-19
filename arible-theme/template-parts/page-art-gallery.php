<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $galleryLoop = new WP_Query(array(
                "post_type" => "art-gallery",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($galleryLoop->have_posts()): ?>
                <?php while($galleryLoop->have_posts()): $galleryLoop->the_post() ?>
                    <?php
                    $artDes = get_field("art_des");
                    $imgIzda = get_field("img_izda");
                    $txtDcha = get_field("txt_dcha");
                    $imgDcha = get_field("img_dcha");
                    $txtIzda = get_field("txt_izda");
                    ?>





<div class="col-6" id="text">
            <p><?php echo $artDes?></p>

        </div>

        <div class="row">
            <div class="col-8">
                <img src="<?php echo $imgIzda ['url']; ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtDcha?></div>
                
            </div>
        </div>


        <div class="row">
            
            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtIzda?></div>
                
            </div>

            <div class="col-8">
                <img src="<?php echo $imgDcha ['url']; ?>" class="img-fluid" alt="...">
            </div>
        </div>


        <div class="row">
            <div class="col-8">
                <img src="<?php echo $imgIzda ['url']; ?>" class="img-fluid" alt="...">
            </div>

            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtDcha?></div>
                
            </div>

        </div>



        <div class="row">
            
            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtIzda?></div>
                
            </div>

            <div class="col-8">
                <img src="<?php echo $imgDcha ['url']; ?>" class="img-fluid" alt="...">
            </div>
        </div>



        <div class="row">
            <div class="col-8">
                <img src="<?php echo $imgIzda ['url']; ?>" class="img-fluid" alt="...">
            </div>

            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtDcha?></div>
                
            </div>

        </div>


        <div class="row">
            
            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtIzda?></div>
                
            </div>

            <div class="col-8">
                <img src="<?php echo $imgDcha ['url']; ?>" class="img-fluid" alt="...">
            </div>
        </div>


        <div class="row">
            <div class="col-8">
                <img src="<?php echo $imgIzda ['url']; ?>" class="img-fluid" alt="...">
            </div>

            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtDcha?></div>
               
            </div>

        </div>



        <div class="row">
            
            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtIzda?></div>
                
            </div>

            <div class="col-8">
                <img src="<?php echo $imgDcha ['url']; ?>" class="img-fluid" alt="...">
            </div>
        </div>



        <div class="row">
            <div class="col-8">
                <img src="<?php echo $imgIzda ['url']; ?>" class="img-fluid" alt="...">
            </div>

            <div class="col-4">
                <!--hacer rectangulo en css-->
                <div class="p"><?php echo $txtDcha?></div>
                
            </div>

        </div>



        
        <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>











<?php get_footer() ?>
