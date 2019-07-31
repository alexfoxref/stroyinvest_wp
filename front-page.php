<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

        <div class="row">
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col-md-4 -->

            <div class="col-lg-8">

                <div class="content">
                    <h2>СтройИнвест</h2>
                    <?php the_content(); ?>
                    <a href="#" class="btn btn-primary">Узнать подробнее о компании</a>
                </div>
                <!-- /.content -->

                <div class="direction">
                    <h2>Направление деятельности</h2>
                    <div class="direction-blocks">
                            <div class="direction-block">
                                <h3>Девелоперские проекты</h3>
                                <img src="./img/directions/1.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Продажа недвижимости</h3>
                                <img src="./img/directions/2.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Строительство</h3>
                                <img src="./img/directions/3.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Инвестиционные программы</h3>
                                <img src="./img/directions/4.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                            <div class="direction-block">
                                <h3>Финансовые инструменты</h3>
                                <img src="./img/directions/4.png" alt="Направление деятельности" class="direction-block_img">
                            </div>
                    </div>
                    <!-- /.direction-blocks -->
                </div>
                <!-- /.direction -->

            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer(); ?>