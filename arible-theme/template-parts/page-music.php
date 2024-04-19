<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $musicLoop = new WP_Query(array(
                "post_type" => "music",
                "posts_per_page" => -1
            ));
            ?>

        <?php if($musicLoop->have_posts()): ?>
                <?php while($musicLoop->have_posts()): $musicLoop->the_post() ?>
                    <?php
                    $musicDes = get_field("music_des");
                    $musicCorazones = get_field("music_corazones");
                    $musicFoot = get_field("music_foot");
                    $musicVideos = get_field("video");

                    ?>
         
         <div class="container" id="middle">
            <div class="col-8">
                <p id="text" ><?php echo $musicDes?></p>
                    
                <div class="container">
                    <button>button</button>
                    <button>button</button>
                </div>
            </div>

            
            
            
            <div class="col-4">
                
                <div class="row">
                    <img src="<?php echo $musicCorazones ['url']; ?>" style="border-width: 5%;" alt="" id="img1">
                </div>

                <div class="row">
                    <p id="description" >
                    <?php echo $musicFoot?>
                    </p>
                </div>
            </div>
        </div>

        <div class="container" id="videos" >
           <!-- embeded -->
           <?php echo $musicCorazones ['url']; ?>
           <?php echo $musicCorazones ['url']; ?>
           <?php echo $musicCorazones ['url']; ?>
           <?php echo $musicCorazones ['url']; ?>
           <?php echo $musicCorazones ['url']; ?>
        </div>

        <div class="container" id="middle1">
            
            <div class="col-4">
                
                <div class="row">
                    <img src="<?php echo $musicCorazones ['url']; ?>" style="border-width: 5%;" alt="" id="img1">
                </div>

                <div class="row">
                    <p id="description" >
                        <?php echo $musicFoot?>
                    </p>
                </div>
            </div>
            
            <div class="col-8">
                <p id="text" ><?php echo $musicDes?></p>

                <div class="container">
                    <button>button</button>
                    <button>button</button>
                </div>
            </div>

            
            
            
            
        </div>
    </div>
</div>

<?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>