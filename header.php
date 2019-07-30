<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="">
    <link rel="icon" href="./favicon.ico">

    <title>СтройИнвест - корпоративный сайт</title>

    <!-- Fonts Google Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body>
    <div class="container">
        <div class="top-nav">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-auto">
                    <div class="logo">
                        <!-- <img src="./img/logo.png" alt="СтройИнвест"> -->
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <!-- /.col-md -->
                
                <!-- взято из шрифта fontello -->
                <button class="top-nav_btn">
                    <i class="icon-menu"></i>
                </button>


                <div class="col-md-auto">
                    <?php wp_nav_menu( [
                        'container'       => 'ul', 
                        'container_class' => 'top-nav_menu', 
                        'menu_class'      => 'top-nav_menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] ); ?>
                </div>
                <!-- /.col-md -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.top-nav -->