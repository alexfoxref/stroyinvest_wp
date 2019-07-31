<?php
/*
Template Name: О компании
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
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>
                <!-- /.content -->
                <h2>Руководство СтройИнвест</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <img src="./img/team/1.png" alt="Петров Дмитрий">
                            <h4>Петров Дмитрий</h4>
                            <p>Руководитель компании</p>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-xl-4 col-sm-6">
                            <img src="./img/team/2.png" alt="Иванов Васисилий">
                            <h4>Иванов Васисилий</h4>
                            <p>Директор, руководитель Департамента по работе с недвижимостью</p>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-xl-4 col-sm-6">
                            <img src="./img/team/3.png" alt="Василькова Анна">
                            <h4>Василькова Анна</h4>
                            <p>Руководитель Департамента по работе с клиентами</p>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.team -->

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