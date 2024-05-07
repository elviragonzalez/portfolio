
<?php get_header() ?>
    <div class="container"id="todo">
        <div class="container" id="title">
            <h1>ARIBLE</h1>
        </div>

        <div class="container" id="presentation">
            <div class="container" id="texto_presentation">
                <p id="description">My name is Elvira González Trillo, but you can find most of my work under the name “ARIBLE”. I’m an artist and a marketing student.</p>
                <p id="description">This portfolio showcases my art and how I’m managing my personal brand using my knowledge on marketing and communication.</p>
                <a id="video" href="https://www.linkedin.com/posts/elvira-gonz%C3%A1lez-trillo-a60b912b5_this-is-my-video-cv-so-happy-to-finally-activity-7177263346138673152-gGYt?utm_source=share&utm_medium=member_desktop" class="btn btn-outline-warning" download>Watch CV video</a>  
                <a id="cv" href="/Users/alexelvigonzaleztrillo/Local Sites/arible/app/public/wp-content/themes/arible-theme/cv.pdf" class="btn btn-outline-warning" download>Download CV</a> 
                <!--no se pq no me funciona este link-->
            </div>

            <div class="container" id="portrait">
                <!-- aqui querria poner un retrato si me da tiempo -->
            </div>
        </div>


        
        <div class="container" id="projects">
            <h1 id="projects_category">Projects</h1>

            <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <?php 
            $projectsLoop = new WP_Query(array(
                "post_type" => "projects",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($projectsLoop->have_posts()): ?>
                <?php while($projectsLoop->have_posts()): $projectsLoop->the_post() ?>
                    <?php
                    $url_cards = get_field("url_cards");
                    $img = get_field("img");
                    $project_title = get_field("project_title");
                    ?>
            <a id="url_cards" href="<?php echo $url_cards ['url'] ?>">
                <div class="container" id="card">
                    <img id="img" src="<?php echo $img ?>" alt=""></img>
                    <p id="project_title"><?php echo $project_title ?></p>
                </div>
            </a>
        </div>

        <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>
    </div>   
    

    <?php get_footer() ?>