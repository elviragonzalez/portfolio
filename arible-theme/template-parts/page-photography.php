<?php get_header() ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php 
            $photoLoop = new WP_Query(array(
                "post_type" => "photography",
                "posts_per_page" => -1
            ));
            ?>

            <?php if($photoLoop->have_posts()): ?>
                <?php while($photoLoop->have_posts()): $photoLoop->the_post() ?>
                    <?php
                    $intro = get_field("intro");
                    $date = get_field("date");
                    $img1 = get_field("img1");
                    $img2 = get_field("img2");
                    $img3 = get_field("img3");
                    $name = get_field("name");
                    ?>


<div class="text"><?php echo $intro?></div>


<div class="subtitle">
    PHOTOGRAPHY <!-- hay que hacer el rectangulo en css-->
</div>

<div class="container" id="gallery" >
    
    <div class="p" id="date" ><?php echo $date?></div>
    <div class="columns">
        <div class="col-3">
            <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <div class="col-3">
            <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
        </div>
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <div class="col-3">
            <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
        </div>
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>            
    <div class="columns">
        <div class="col-3">
            <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-3">
            <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
        </div>
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <!-- en esta hay 2 imagenes -->
    <div class="p" id="date" ><?php echo $date?></div>            
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        
    </div>
    <div class="p" id="name" ><?php echo $name?></div>

    
    <!-- en esta hay 3 imagenes pero en 2 columnas -->
    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <div class="col-8">
            <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        </div>

        <div class="col-4">
            <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
            <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
        </div>
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>            
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p"id="name"><?php echo $name?></div>


    <!--en esta hay solo 2-->
    <div class="p" id="date" ><?php echo $date?></div>
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        
    </div>
    <div class="p" id="name"><?php echo $name?></div>


    <div class="p" id="date" ><?php echo $date?></div>           
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date"><?php echo $date?></div>           
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name"><?php echo $name?></div>


    <div class="p" id="date"><?php echo $date?></div>         
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name" ><?php echo $name?></div>


    <div class="p" id="date"><?php echo $date?></div>
    
    <div class="columns">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>

    <div class="columns_padding">
        <img src="<?php echo $img1 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img2 ['url']; ?>" class="img-fluid" alt="...">
        <img src="<?php echo $img3 ['url']; ?>" class="img-fluid" alt="...">
    </div>
    <div class="p" id="name_padding"><?php echo $name?></div>

</div>


<?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>

         <?php endwhile; ?>
     <?php endif; ?>











<?php get_footer() ?>

