<?php wp_footer() ?>
    <footer>      
        
            
        <?php if(have_posts()): ?> 
        <?php while(have_posts()): the_post(); ?>

            <?php 
                $spotify = get_field ('spotify');
                $youtube = get_field ('youtube');
                $linkedin = get_field ('linkedin');
                $instagram = get_field ('instagram');
                $tiktok = get_field ('tiktok');
                $title_footer = get_field ('title_footer');
            
            ?>
            
            <div class="row" id="icons">
                <!-- Spotify -->
                <a href="<?php echo $spotify ?>"><i class="fab fa-spotify"></i></a>
                <!-- YouTube -->
                <a href="<?php echo $youtube ?>"><i class="fab fa-youtube"></i></a>
                <!-- LinkedIn -->
                <a href="<?php echo $linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
                <!-- Instagram -->
                <a href="<?php echo $instagram ?>"><i class="fab fa-instagram"></i></a>
                <!-- TikTok -->
                <a href="<?php echo $tiktok ?>"><i class="fab fa-tiktok"></i></a>
                
            </div>

            <h1 id="title_footer"><?php echo $title_footer ?></h1>

        <?php endwhile; ?>
        <?php endif; ?>  
        
    </footer>
</body>
</html>