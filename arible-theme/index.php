<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $homepageLoop = new WP_Query(array(
                "post_type" => "homepage",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($homepageLoop->have_posts()): ?>
                <?php while($homepageLoop->have_posts()): $homepageLoop->the_post() ?>
                    <?php
                    $hpAbout1 = get_field("hp-about1");
                    
                    $portrait = get_field("portrait");
                    
                    ?>



<div class="col-md-5" id="circle">
    
</div>


                    <div class="container text-center" id="middle">
                                
                                <div class="row">
                                    
                                    
                                    
                                    <div class="col col-lg-6">
                                        <div class="row" style="color: white; text-align: left;" id="text" ><?php echo $hpAbout1?></div>
                                        <div class="cv-video">
                                            <a href="https://www.linkedin.com/posts/elvira-gonz%C3%A1lez-trillo-a60b912b5_this-is-my-video-cv-so-happy-to-finally-activity-7177263346138673152-gGYt?utm_source=share&utm_medium=member_desktop" class="btn btn-outline-warning" download>Watch CV video</a>    
                                        </div>
                                        <div class="cv">
                                        <a href="<?php echo get_template_directory_uri() ?>/img/cv.pdf" class="btn btn-outline-warning" download>
                                            Download CV
                                        </a>    
                                        </div> <!--este no consigo que funcione-->
                                    </div>
                                    
                                    
                                    
                                    <div class="col col-sm-6">
                                    <img src="<?php echo $portrait ['url']; ?>" width="800vw" height="800vw">
                                    </div>
                                    
                                </div>
                            </div>
               
        
        <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>











<?php get_footer() ?>