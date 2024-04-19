<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo("name")?> </title>
    <?php wp_head() ?>
</head>
<body>
    <div class="container-fluid">
       
        <div class="row" id="top">
            <div class="col-md-7" id="title">
                
                <a href="<?php echo esc_url(get_permalink(get_page_by_path("homepage"))); ?>">ARIBLE</a>
            </div>
           
        </div>


        <div class="row" id="nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("music"))); ?> ">MUSIC</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        AUDIOVISUAL
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_page_by_path("photography"))); ?>">PHOTOGRAPHY</a></li>
                      <li><a class="dropdown-item" href="<?php echo esc_url(get_permalink(get_page_by_path("short-film"))); ?>">SHORT FILMS</a></li>
                    </ul>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("art-gallery"))); ?>">ART GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("writing"))); ?>">WRITING</a>
                </li>
                
            </ul>
        </div>


