
<?php get_header() ?>
    <?php if(have_posts()): ?> 
    <?php while(have_posts()): the_post(); ?>

        <?php 
            $header = get_field ('header');
            $text1 = get_field ('text1');
            $text2 = get_field ('text2');
            $videocv = get_field ('videocv');
            $cvfile = get_field ('cvfile');
        
        ?>

        <div class="container"id="todo">
            <div class="container" id="title">
                <h1><?php echo $header?> </h1>
            </div>

            <div class="container" id="presentation">
                <div class="container" id="texto_presentation">
                    <p id="description"><?php echo $text1 ?> </p>
                    <p id="description"><?php echo $text2 ?></p>
                
                    <a id="video" href="<?php echo $videocv ?>" download>Watch CV video</a>  
                    <a id="cv" href="<?php echo $cvfile ?>" download>Download CV</a> 
                    <!--this one I cannot get to download the cv file, instead it downloads the html filw for some reason-->
                </div>

            </div>


                
            <div class="container" id="projects">
                <h1 id="projects_category">Projects</h1>
            </div>
            
            <?php 
                $projectLoop = new WP_Query(array(
                    "post_type" => "project",
                    "posts_per_page" => -1
                ));
            ?>

            <?php if($projectLoop->have_posts()): ?>
            
            <?php while($projectLoop->have_posts()): $projectLoop->the_post(); ?>
                <?php
                $url_cards = get_field("url_cards");
                $img = get_field("img");
                $project_title = get_field("project_title");
                ?>

                <div class="container">
                    <a id="url_cards" href="<?php echo $url_cards['url']; ?>">
                        <div class="container" id="card">
                            <img id="img" src="<?php echo $img; ?>" alt="covers">
                            <p id="project_title"><?php echo $project_title; ?></p>
                        </div>
                    </a>
                </div>   
                    
                
            

            <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
            <?php endif; ?>
        
        </div>
            
    <?php endwhile; ?>
    <?php endif; ?>  
    

<?php get_footer() ?>